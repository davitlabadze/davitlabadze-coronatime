<div>
    <header class="w-full border-b border-b-dark-4 h-80">
        <div class="flex ml-108 mr-108 py-19 sm:ml-2">
            <img src="{{ asset('img/logo.svg') }}" alt="coronatime logo">
            <div class="flex items-center justify-end w-full">
                <div class="mr-40 text-16 sm:ml-19">
                    <x-change-lang />
                </div>
                <div class="lg:hidden">
                    <button x-data @click="$dispatch('custom-logout-modal')" type="button" class="block lg:hidden">
                        <img   class="mr-4" src="{{ asset('img/burgermenu.svg') }}" alt="burger menu logo" />
                    </button>
                    <livewire:logout />
                </div>
                <div>
                    <h1 class="font-bold text-16 sm:hidden">{{ $user->name }}</h1>
                </div>
                <div class="w-1 h-32 ml-16 mr-16 bg-dark-20 sm:hidden"></div>
                <div class="sm:hidden">
                    <a href="#" x-data x-cloak
                        @click="$dispatch('custom-logout-modal')"
                        class="font-medium cursor-pointer ">{{ __('Log Out') }}</a>
                    <livewire:logout />
                </div>
            </div>
        </div>
    </header>
    <div>
        <livewire:status-filter />
    </div>
    <div>
        @yield('content')
    </div>
</div>
