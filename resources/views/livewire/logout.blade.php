<div x-cloak>
    <div
    x-data="{ isOpen: false }"
    x-show="isOpen"
    @keydown.escape.window="isOpen = false"
    @custom-logout-modal.window="isOpen = true"
    class="fixed inset-0 z-10 overflow-y-auto"
    aria-labelledby="modal-title"
    role="dialog"
    aria-modal="true">
        <div class="flex items-center justify-center min-h-screen">
            <div class="fixed inset-0 transition-opacity bg-opacity-75 bg-dark-60" aria-hidden="true"></div>
            <div class="py-4 pt-5 pb-4 overflow-hidden transition-all transform rounded-lg bg-dark-fff sm:max-w-lg sm:w-full sm:p-6">
                <div>
                    <div class="px-3 mt-3 text-center sm:mt-5">
                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{{ __('Do you really want to log out?') }}</h3>
                    </div>
                </div>
                <div class="flex mt-5 ml-3 mr-3 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                    <button
                    type="button"
                    @click="isOpen=false"
                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium bg-white border rounded-md shadow-sm border-inner-border hover:bg-dark-60 hover:text-dark-fff sm:mt-0 sm:col-start-1 sm:text-sm">
                    {{ __('Cancel') }}
                </button>
                    <button
                        type="button"
                        class="inline-flex justify-center w-full px-4 py-2 ml-3 text-base font-medium border border-transparent rounded-md shadow-sm text-dark-fff bg-brand-secondary sm:col-start-2 sm:text-sm"
                        wire:click="logout">
                        {{ __('Log Out') }}
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
