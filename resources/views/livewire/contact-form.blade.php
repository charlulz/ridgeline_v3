<div>
    @if (session()->has('message'))
        <div class="mb-6 bg-green-100 dark:bg-green-900 border border-green-400 dark:border-green-600 text-green-700 dark:text-green-200 px-4 py-3 rounded-lg">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="submit" class="space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">First Name</label>
                <input type="text" id="first-name" wire:model="first_name" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('first_name') border-red-500 @enderror" required>
                @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="last-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Last Name</label>
                <input type="text" id="last-name" wire:model="last_name" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('last_name') border-red-500 @enderror" required>
                @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
        
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
            <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('email') border-red-500 @enderror" required>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Phone Number</label>
            <input type="tel" id="phone" wire:model="phone" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('phone') border-red-500 @enderror">
            @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="service-type" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Service Type</label>
            <select id="service-type" wire:model="service_type" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('service_type') border-red-500 @enderror">
                <option value="">Select a service</option>
                <option value="residential">Residential Roofing</option>
                <option value="commercial">Commercial Roofing</option>
                <option value="repair">Roof Repair</option>
                <option value="maintenance">Roof Maintenance</option>
                <option value="emergency">Emergency Service</option>
                <option value="other">Other</option>
            </select>
            @error('service_type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
            <textarea id="message" wire:model="message" rows="4" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white @error('message') border-red-500 @enderror" placeholder="Please describe your roofing needs..."></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
</div>

        <div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 font-medium disabled:opacity-50 disabled:cursor-not-allowed" wire:loading.attr="disabled">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </form>
</div>