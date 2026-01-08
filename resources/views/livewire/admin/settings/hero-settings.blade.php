<div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 p-6">
        <form wire:submit="save">
            <!-- Current Hero Image -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Current Hero Image</label>
                <div class="relative">
                    <img src="{{ asset('storage/' . $currentImagePath) }}" alt="Current hero image" class="w-full h-64 object-cover rounded-lg border border-gray-300 dark:border-gray-600">
                </div>
            </div>

            <!-- Upload New Image -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Upload New Hero Image</label>
                <input type="file" wire:model="heroImage" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
                @error('heroImage') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                @if($heroImage)
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Preview:</p>
                        <img src="{{ $heroImage->temporaryUrl() }}" alt="Preview" class="w-full h-64 object-cover rounded-lg border border-gray-300 dark:border-gray-600">
                    </div>
                @endif
            </div>

            <!-- Headline -->
            <div class="mb-6">
                <label for="headline" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Headline</label>
                <textarea 
                    wire:model="headline" 
                    id="headline"
                    rows="3"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:text-white"
                    placeholder="Enter headline (use new lines for multiple lines)"
                ></textarea>
                @error('headline') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Tip: Use new lines to create multi-line headlines</p>
            </div>

            <!-- Subheadline -->
            <div class="mb-6">
                <label for="subheadline" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subheadline</label>
                <textarea 
                    wire:model="subheadline" 
                    id="subheadline"
                    rows="3"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:text-white"
                    placeholder="Enter subheadline"
                ></textarea>
                @error('subheadline') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Save Button -->
            <div class="flex items-center justify-end space-x-4">
                <button 
                    type="submit" 
                    wire:loading.attr="disabled"
                    class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                >
                    <span wire:loading.remove>Save Changes</span>
                    <span wire:loading>Saving...</span>
                </button>
            </div>
        </form>
    </div>
</div>
