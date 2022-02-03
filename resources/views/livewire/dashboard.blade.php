<div>
    <header class="w-full border-b border-b-dark-4 h-80">
        <div class="flex ml-108 mr-108 py-19 sm:ml-2">
            <img src="{{ asset('img/logo.svg') }}" alt="coronatime logo">
            <div class="flex items-center justify-end w-full">
                <div class="mr-40 text-16 sm:ml-19">
                    <x-change-lang />
                </div>
                <div class="lg:hidden">
                    <div x-data="{isOpen:false}">
                        <button @click="isOpen = !isOpen" type="button" class="block lg:hidden">
                            <img class="w-6 h-6 mr-4" x-show="isOpen" src="{{ asset('img/close.svg') }}" alt="x" />
                            <img x-show="!isOpen" class="mr-4" src="{{ asset('img/burgermenu.svg') }}"
                                alt="burger menu logo">
                            <div x-show="isOpen" @click.away="isOpen = false"
                                class="absolute right-0 flex rounded-lg w-96 h-900 mt-7 bg-dark-4">
                                <div class="z-50 w-full">
                                    <div class="p-2 mt-2 border-b rounded border-b-dark-100 b">
                                        <h1 class="font-bold text-16">{{ $user->name }}</h1>
                                        {{-- <h1 class="font-bold text-16">Takeshi K.</h1> --}}
                                    </div>
                                    <div
                                        class="h-auto p-2 rounded-lg ml-28 mt-52 w-44 bg-dark-60 hover:bg-brand-secondary hover:text-dark-fff">
                                        <livewire:logout />
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div>
                    {{-- <h1 class="font-bold text-16 sm:hidden">Takeshi K.</h1> --}}
                    <h1 class="font-bold text-16 sm:hidden">{{ $user->name }}</h1>
                </div>
                <div class="w-1 h-32 ml-16 mr-16 bg-dark-20 sm:hidden"></div>
                <div class="sm:hidden">
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
