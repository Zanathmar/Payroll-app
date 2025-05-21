<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'notes',
    ];

    /**
     * Get the user that owns the attendance record.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Check if this is a check-in record
     */
    public function isCheckIn(): bool
    {
        return str_contains($this->type, 'check-in');
    }
    
    /**
     * Check if this is an overtime record
     */
    public function isOvertime(): bool
    {
        return str_contains($this->type, 'overtime');
    }
    
    /**
     * Scope a query to only include check-in records.
     */
    public function scopeCheckIns($query)
    {
        return $query->where('type', 'like', '%check-in%');
    }
    
    /**
     * Scope a query to only include check-out records.
     */
    public function scopeCheckOuts($query)
    {
        return $query->where('type', 'like', '%check-out%');
    }
    
    /**
     * Scope a query to only include overtime records.
     */
    public function scopeOvertime($query)
    {
        return $query->where('type', 'like', '%overtime%');
    }
    
    /**
     * Scope a query to only include regular (non-overtime) records.
     */
    public function scopeRegular($query)
    {
        return $query->where('type', 'not like', '%overtime%');
    }
}