<div>
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 p-6">
        <form wire:submit="save">
            <!-- Storm Season Alert -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Storm Season Alert</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Display alert banner on homepage</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" wire:model="stormAlertEnabled" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-600"></div>
                    </label>
                </div>

                @if($stormAlertEnabled)
                    <div class="space-y-4">
                        <!-- Alert Text -->
                        <div>
                            <label for="stormAlertText" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alert Text</label>
                            <input 
                                type="text" 
                                wire:model="stormAlertText" 
                                id="stormAlertText"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:text-white"
                                placeholder="Storm Season Alert - Act Now!"
                            >
                            @error('stormAlertText') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Alert Color -->
                        <div>
                            <label for="stormAlertColor" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Alert Color</label>
                            <select 
                                wire:model="stormAlertColor" 
                                id="stormAlertColor"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 dark:bg-gray-700 dark:text-white"
                            >
                                <option value="red">Red</option>
                                <option value="orange">Orange</option>
                                <option value="yellow">Yellow</option>
                                <option value="blue">Blue</option>
                            </select>
                            @error('stormAlertColor') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <!-- Preview -->
                        <div class="mt-6 p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <p class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Preview:</p>
                            <div class="inline-flex items-center rounded-full px-4 py-2" style="background-color: rgba(220, 38, 38, 0.2); border: 1px solid rgba(248, 113, 113, 0.3);">
                                <svg class="h-4 w-4 mr-2" style="color: rgb(252, 165, 165);" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-sm font-semibold" style="color: rgb(254, 202, 202);">{{ $stormAlertText }}</span>
                            </div>
                        </div>
                    </div>
                @endif
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
