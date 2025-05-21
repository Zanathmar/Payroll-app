 <!-- Right Panel - Actions and Card Scanner -->
 <div class="w-full flex justify-center">
        <div class="w-full md:w-96 flex flex-col gap-6">
            <!-- Action Buttons -->
            <div class="dark:bg-zinc-900 rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200 mb-4">Select Action</h3>
                <div class="grid grid-cols-2 gap-3">
                    <button 
                        wire:click="setType('check-in')" 
                        class="flex flex-col items-center justify-center p-4 rounded-lg transition-all duration-200 {{ $type === 'check-in' ? 'bg-emerald-100 dark:bg-emerald-900 ring-2 ring-emerald-400' : 'bg-gray-50 dark:bg-gray-800 hover:bg-emerald-50 dark:hover:bg-emerald-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ $type === 'check-in' ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        <span class="mt-2 text-sm font-medium {{ $type === 'check-in' ? 'text-emerald-700 dark:text-emerald-300' : 'text-gray-600 dark:text-gray-300' }}">Check In</span>
                    </button>
                    
                    <button 
                        wire:click="setType('check-out')" 
                        class="flex flex-col items-center justify-center p-4 rounded-lg transition-all duration-200 {{ $type === 'check-out' ? 'bg-rose-100 dark:bg-rose-900 ring-2 ring-rose-400' : 'bg-gray-50 dark:bg-gray-800 hover:bg-rose-50 dark:hover:bg-rose-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ $type === 'check-out' ? 'text-rose-600 dark:text-rose-400' : 'text-gray-500 dark:text-gray-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="mt-2 text-sm font-medium {{ $type === 'check-out' ? 'text-rose-700 dark:text-rose-300' : 'text-gray-600 dark:text-gray-300' }}">Check Out</span>
                    </button>
                    
                    <button 
                        wire:click="setType('overtime-check-in')" 
                        class="flex flex-col items-center justify-center p-4 rounded-lg transition-all duration-200 {{ $type === 'overtime-check-in' ? 'bg-emerald-100 dark:bg-emerald-900 ring-2 ring-emerald-400' : 'bg-gray-50 dark:bg-gray-800 hover:bg-emerald-50 dark:hover:bg-emerald-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ $type === 'overtime-check-in' ? 'text-emerald-600 dark:text-emerald-400' : 'text-gray-500 dark:text-gray-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="mt-2 text-sm font-medium {{ $type === 'overtime-check-in' ? 'text-emerald-700 dark:text-emerald-300' : 'text-gray-800 dark:text-gray-300' }}">OT Check In</span>
                    </button>
                    
                    <button 
                        wire:click="setType('overtime-check-out')" 
                        class="flex flex-col items-center justify-center p-4 rounded-lg transition-all duration-200 {{ $type === 'overtime-check-out' ? 'bg-rose-100 dark:bg-rose-900 ring-2 ring-rose-400' : 'bg-gray-50 dark:bg-gray-800 hover:bg-rose-50 dark:hover:bg-rose-800' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 {{ $type === 'overtime-check-out' ? 'text-rose-600 dark:text-rose-400' : 'text-gray-500 dark:text-gray-300' }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="mt-2 text-sm font-medium {{ $type === 'overtime-check-out' ? 'text-rose-700 dark:text-rose-300' : 'text-gray-800 dark:text-gray-300' }}">OT Check Out</span>
                    </button>
                </div>
            </div>
            
            <!-- Card Scanner Section -->
            <div id="scanner-panel" class="bg-white dark:bg-zinc-900 rounded-xl shadow-lg p-6 flex flex-col items-center">
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200 mb-4">Card Scanner</h3>
                
                <div class="w-full relative mb-4">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300 dark:border-gray-500"></div>
                    </div>
                    <div class="relative flex justify-center">
                        <span class="bg-white dark:bg-gray-700 px-2 text-sm text-gray-500 dark:text-gray-400">
                            {{ $scannerConnected ? 'Scanner Ready' : 'Scanner Not Connected' }}
                        </span>
                    </div>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="mb-4 p-4 rounded-full {{ $scannerConnected ? 'bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-400' : 'bg-amber-100 dark:bg-amber-900 text-amber-600 dark:text-amber-400' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a3 3 0 11-6 0 3 3 0 016 0zm6 8a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    
                    <p class="text-center text-sm mb-3 text-gray-600 dark:text-gray-300">
                        {{ $scannerConnected ? 'Tap your card on the scanner to register attendance' : 'Click the button below to connect the scanner' }}
                    </p>
                    
                    @if(!$scannerConnected)
                    <button id="connect-scanner" class="mt-2 px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-colors duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Connect Scanner
                    </button>
                    @endif
                    
                    <div id="scan-animation" class="{{ $scanning ? 'block' : 'hidden' }} mt-4">
                        <div class="flex justify-center space-x-2">
                            <div class="w-2 h-2 bg-blue-600 dark:bg-blue-400 rounded-full animate-bounce"></div>
                            <div class="w-2 h-2 bg-blue-600 dark:bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                            <div class="w-2 h-2 bg-blue-600 dark:bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Status Message -->
                <div class="mt-6 w-full">
                    <div id="status-message" class="{{ $statusMessage ? 'flex' : 'hidden' }} items-center p-4 {{ $statusSuccess ? 'bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300' : 'bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-300' }} rounded-lg text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $statusSuccess ? 'M5 13l4 4L19 7' : 'M6 18L18 6M6 6l12 12' }}" />
                        </svg>
                        <span>{{ $statusMessage }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Clock functionality
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
    }

    // Start the clock when page loads
    document.addEventListener('DOMContentLoaded', function() {
        startTime();
    });

    // Serial port functionality
    document.addEventListener('livewire:initialized', () => {
        const connectButton = document.getElementById('connect-scanner');
        
        if (connectButton) {
            connectButton.addEventListener('click', async () => {
                try {
                    // Prompt user to select any serial port
                    const port = await navigator.serial.requestPort();
                    
                    // Notify Livewire that scanner is connected
                    Livewire.dispatch('scanner-connected');
                    
                    // Open the port
                    await port.open({ baudRate: 9600 });
                    
                    // Start reading from the port
                    await startReading(port);
                    
                } catch (error) {
                    console.error('Error connecting to serial port:', error);
                    Livewire.dispatch('scanner-error', { message: error.message });
                }
            });
        }
    });

    async function startReading(port) {
        const textDecoder = new TextDecoderStream();
        const readableStreamClosed = port.readable.pipeTo(textDecoder.writable);
        const reader = textDecoder.readable.getReader();
        
        Livewire.dispatch('scanning-started');
        
        try {
            while (true) {
                const { value, done } = await reader.read();
                
                if (done) {
                    reader.releaseLock();
                    break;
                }
                
                console.log('Received data:', value);
                
                try {
                    // Extract UID from the response
                    const uidMatch = /UID: (.*)/.exec(value);
                    if (uidMatch && uidMatch[1]) {
                        const uid = uidMatch[1].trim();
                        console.log('Extracted UID:', uid);
                        
                        // Send the UID to Livewire component
                        Livewire.dispatch('card-scanned', { uid: uid });
                    }
                } catch (error) {
                    console.error('Error processing card data:', error);
                    Livewire.dispatch('scanner-error', { message: 'Error reading card: ' + error.message });
                }
            }
        } catch (error) {
            console.error('Error reading from serial port:', error);
            Livewire.dispatch('scanner-error', { message: 'Connection error: ' + error.message });
        } finally {
            Livewire.dispatch('scanning-stopped');
            
            try {
                await port.close();
            } catch (error) {
                console.error('Error closing port:', error);
            }
        }
    }
</script>