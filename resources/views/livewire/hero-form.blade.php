<div>
    @if ($success)
        <!-- Success Message -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-2xl mb-8 max-w-md mx-auto lg:mx-0">
            <div class="text-center">
                <div class="h-16 w-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Thank You!</h3>
                <p class="text-gray-600 mb-4">We'll call you within 30 minutes to schedule your free roof inspection.</p>
                <p class="text-sm text-gray-500">Redirecting...</p>
            </div>
        </div>
        
        <script>
            document.addEventListener('livewire:init', () => {
                Livewire.on('redirect', (event) => {
                    window.location.href = event.url;
                });
            });
        </script>
    @else
        <!-- Hero Form -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-2xl mb-8 max-w-md mx-auto lg:mx-0">
            <div class="text-center mb-4">
                <h3 class="text-xl font-bold text-gray-900 mb-2">Emergency Roof Inspection</h3>
                <p class="text-sm text-gray-600">Free • No obligation • Same-day response</p>
            </div>
            
            <form wire:submit="submit" class="space-y-4">
                <!-- Name -->
                <div>
                    <input 
                        type="text" 
                        wire:model="name"
                        placeholder="Your Name" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('name') border-red-500 @enderror"
                    >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Phone -->
                <div>
                    <input 
                        type="tel" 
                        wire:model="phone"
                        placeholder="Phone Number" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('phone') border-red-500 @enderror"
                    >
                    @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Email (Optional) -->
                <div>
                    <input 
                        type="email" 
                        wire:model="email"
                        placeholder="Email (Optional)" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('email') border-red-500 @enderror"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <!-- Property Type -->
                <div>
                    <select 
                        wire:model="property_type"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 @error('property_type') border-red-500 @enderror"
                    >
                        <option value="">Property Type (Optional)</option>
                        <option value="residential">Residential Home</option>
                        <option value="commercial">Commercial Building</option>
                        <option value="multi_unit">Multi-Unit Property</option>
                        <option value="not_sure">Not Sure</option>
                    </select>
                    @error('property_type')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Property Address -->
                <div>
                    <input 
                        type="text" 
                        wire:model="property_address"
                        placeholder="Property Address (Optional)" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 placeholder-gray-500 @error('property_address') border-red-500 @enderror"
                    >
                    @error('property_address')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Urgency -->
                <div>
                    <select 
                        wire:model="urgency"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 @error('urgency') border-red-500 @enderror"
                    >
                        <option value="">Urgency Level (Optional)</option>
                        <option value="emergency">Emergency - Immediate Help Needed</option>
                        <option value="high">High - Within 24 Hours</option>
                        <option value="medium">Medium - This Week</option>
                        <option value="low">Low - Planning Ahead</option>
                    </select>
                    @error('urgency')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Preferred Contact Time -->
                <div>
                    <select 
                        wire:model="preferred_contact_time"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 text-gray-900 @error('preferred_contact_time') border-red-500 @enderror"
                    >
                        <option value="">Best Time to Contact (Optional)</option>
                        <option value="morning">Morning (8AM-12PM)</option>
                        <option value="afternoon">Afternoon (12PM-5PM)</option>
                        <option value="evening">Evening (5PM-8PM)</option>
                        <option value="anytime">Anytime</option>
                    </select>
                    @error('preferred_contact_time')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Insurance Claim -->
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        wire:model="insurance_claim"
                        id="insurance_claim"
                        class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded"
                    >
                    <label for="insurance_claim" class="ml-2 text-sm text-gray-700">
                        I have an active insurance claim
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-4 rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl disabled:opacity-50 disabled:cursor-not-allowed"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>Get Emergency Inspection</span>
                    <span wire:loading>Sending...</span>
                </button>
            </form>
            
            <!-- Trust Text -->
            <p class="text-xs text-gray-500 text-center mt-3">
                ✓ Licensed & Insured ✓ Emergency Response ✓ No High-Pressure Sales
            </p>
        </div>
    @endif
</div>