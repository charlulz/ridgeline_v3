<div>
    @if (session()->has('replacement_callback_success'))
        <div role="status" class="rounded-lg bg-green-100 p-4 font-semibold text-green-800">{{ session('replacement_callback_success') }}</div>
    @else
        @if (session()->has('replacement_callback_error'))
            <div role="alert" class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-800">{{ session('replacement_callback_error') }}</div>
        @endif

        <form wire:submit="submit" class="space-y-4">
            <div>
                <label for="callback-name" class="mb-1 block text-sm font-semibold">Name</label>
                <input id="callback-name" type="text" wire:model="name" autocomplete="name" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-600 focus:ring-orange-600">
                @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div>
                    <label for="callback-phone" class="mb-1 block text-sm font-semibold">Phone</label>
                    <input id="callback-phone" type="tel" wire:model="phone" autocomplete="tel" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-600 focus:ring-orange-600">
                    @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="callback-zip" class="mb-1 block text-sm font-semibold">ZIP Code</label>
                    <input id="callback-zip" type="text" wire:model="zip" autocomplete="postal-code" inputmode="numeric" required class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-orange-600 focus:ring-orange-600">
                    @error('zip') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>
            <button type="submit" wire:loading.attr="disabled" class="w-full rounded-lg bg-orange-600 px-5 py-3.5 text-lg font-bold text-white transition hover:bg-orange-700 disabled:opacity-60">
                <span wire:loading.remove>Request My Callback</span>
                <span wire:loading>Sending…</span>
            </button>
            <p class="text-center text-xs text-gray-500">By submitting, you agree Ridgeline Roofing may contact you about your request.</p>
        </form>
    @endif
</div>
