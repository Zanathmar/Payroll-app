<?php

namespace App\Livewire\Employee;

use App\Models\Attendance;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class AttendanceClocker extends Component
{
    public $type = 'check-in';
    public $scannerConnected = false;
    public $scanning = false;
    public $statusMessage = null;
    public $statusSuccess = false;
    public $lastAction = null;
    
    protected $listeners = [
        'scanner-connected' => 'handleScannerConnected',
        'scanning-started' => 'handleScanningStarted',
        'scanning-stopped' => 'handleScanningStopped',
        'card-scanned' => 'handleCardScanned',
        'scanner-error' => 'handleScannerError',
        'clock-fire' => 'clockInOut',
        'clearStatusMessage' => 'clearStatusMessage'
    ];
    
    public function mount()
    {
        // Initialize lastAction to null to prevent undefined variable error
        $this->lastAction = null;
        
        // Set the default type based on last action
        $this->setDefaultType();
    }
    public function render()
    {
        return view('livewire.employee.attendance-clocker');
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function setDefaultType()
    {
        // Find the most recent attendance record for setting appropriate default type
        $lastAttendance = Attendance::latest()->first();
        
        if ($lastAttendance) {
            $this->lastAction = [
                'type' => $lastAttendance->type,
                'time' => $lastAttendance->created_at->format('M j, Y g:i A')
            ];
            
            // If the last action was a check-in, default to check-out
            if (str_contains($lastAttendance->type, 'check-in')) {
                $this->type = str_contains($lastAttendance->type, 'overtime') 
                    ? 'overtime-check-out' 
                    : 'check-out';
            }
        }
    }
    
    public function handleScannerConnected()
    {
        $this->scannerConnected = true;
        $this->statusMessage = 'Scanner connected successfully';
        $this->statusSuccess = true;
        
        // Clear the message after 3 seconds
        $this->dispatch('clearStatusMessage');
    }
    
    public function handleScanningStarted()
    {
        $this->scanning = true;
    }
    
    public function handleScanningStopped()
    {
        $this->scanning = false;
        $this->scannerConnected = false;
    }
    
    /**
     * Handle the clockInOut event from the original code
     * This maintains compatibility with the original implementation
     */
    public function clockInOut($uid)
    {
        $this->handleCardScanned(['uid' => $uid]);
    }
    
    public function handleCardScanned($data)
    {
        $uid = $data['uid'];
        
        try {
            // Find the user by their card UID
            $user = User::where('card_uid', $uid)->first();
            
            if (!$user) {
                $this->showErrorMessage("Unknown card. Please contact an administrator.");
                return;
            }
            
            // Record the attendance
            $attendance = new Attendance();
            $attendance->user_id = $user->id;
            $attendance->type = $this->type;
            $attendance->save();
            
            // Update the last action
            $this->lastAction = [
                'type' => $this->type,
                'time' => now()->format('M j, Y g:i A')
            ];
            
            // Show success message
            $this->showSuccessMessage("{$user->name} - {$this->type} successful at " . now()->format('g:i A'));
            
            // Toggle the type (check-in -> check-out or vice versa)
            $this->toggleType();
            
        } catch (\Exception $e) {
            Log::error('Error processing attendance: ' . $e->getMessage());
            $this->showErrorMessage('An error occurred. Please try again.');
        }
    }
    
    public function handleScannerError($data)
    {
        $this->showErrorMessage('Scanner error: ' . $data['message']);
        $this->scanning = false;
    }
    
    public function clearStatusMessage()
    {
        $this->statusMessage = null;
    }
    
    protected function showSuccessMessage($message)
    {
        $this->statusMessage = $message;
        $this->statusSuccess = true;
        
        // Clear the message after 5 seconds using JavaScript setTimeout
        $this->dispatch('setTimeout', ['clearStatusMessage', 5000]);
    }
    
    protected function showErrorMessage($message)
    {
        $this->statusMessage = $message;
        $this->statusSuccess = false;
        
        // Clear the message after 5 seconds using JavaScript setTimeout
        $this->dispatch('setTimeout', ['clearStatusMessage', 5000]);
    }
    
    protected function toggleType()
    {
        // Switch between check-in and check-out (maintaining overtime status)
        if ($this->type === 'check-in') {
            $this->type = 'check-out';
        } elseif ($this->type === 'check-out') {
            $this->type = 'check-in';
        } elseif ($this->type === 'overtime-check-in') {
            $this->type = 'overtime-check-out';
        } elseif ($this->type === 'overtime-check-out') {
            $this->type = 'overtime-check-in';
        }
    }
}