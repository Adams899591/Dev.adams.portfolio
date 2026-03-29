  <!-- Left Column: Contact Form -->
                <div class="relative min-h-[400px] flex flex-col justify-start">
                    <!-- Contact Form Section: Responsive form layout -->
                    <div class="w-full">
                        <form wire:submit.prevent="submitForm" class="bg-slate-900/40 border border-slate-800 p-5 md:p-6 lg:p-8 rounded-lg backdrop-blur-sm space-y-4 md:space-y-5 lg:space-y-6" wire:loading.class="opacity-50" wire:target="submitForm">
                         
                            @if (session("status"))
                                 <span class="text-center text-neon-blue">{{session("status")}}</span>
                            @endif
                        
                            <!-- Email Input Field -->
                            <div>
                                <label for="email" class="block text-xs md:text-sm font-bold text-neon-blue mb-2">EMAIL_ADDRESS:</label>
                                <input type="email" id="email" wire:model.defer="email"  class="w-full bg-slate-950 border-2 border-slate-700 rounded p-2 md:p-3 text-slate-300 text-sm md:text-base focus:border-neon-blue focus:ring-0 transition-colors placeholder:text-slate-600" placeholder="your-email@domain.com" wire:loading.attr="disabled" wire:target="submitForm">
                                @error('email')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- Message Textarea Field -->
                            <div>
                                <label for="message" class="block text-xs md:text-sm font-bold text-neon-blue mb-2">MESSAGE_BODY:</label>
                                <textarea id="message" wire:model.defer="message"  rows="5" md:rows="6" class="w-full bg-slate-950 border-2 border-slate-700 rounded p-2 md:p-3 text-slate-300 text-sm md:text-base focus:border-neon-blue focus:ring-0 transition-colors placeholder:text-slate-600" placeholder="Describe your project requirements here..." wire:loading.attr="disabled" wire:target="submitForm"></textarea>
                                @error('message')
                                    <span style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <!-- Form Action Buttons: Back and Submit -->
                            <div class="flex flex-col md:flex-row justify-between items-center gap-3 md:gap-4">
                                <span class="text-slate-500 text-xs md:text-sm"></span>
                                <button type="submit" class="px-6 md:px-8 py-2 md:py-3 bg-neon-blue/10 border border-neon-blue/50 text-neon-blue rounded hover:bg-neon-blue hover:text-black transition-all duration-300 font-bold tracking-wider group relative overflow-hidden w-full md:w-48 h-10 md:h-12 flex items-center justify-center text-sm md:text-base" wire:loading.attr="disabled" wire:target="submitForm">
                                    <span class="relative z-10" wire:loading.remove wire:target="submitForm">
                                        SUBMIT_REQUEST
                                    </span>
                                    
                                    {{-- This is the loading spinner that shows on submit --}}
                                    <span wire:loading wire:target="submitForm">
                                        <svg class="animate-spin h-5 w-5 md:h-6 md:w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                    </span>

                                    <div class="absolute inset-0 bg-neon-blue transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300 z-0"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>