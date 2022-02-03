<div x-data="{isOpen:false}">
    <button @click="isOpen = !isOpen" class="relative flex border-none bg-dark-fff">
        @if (session()->get('lang') === 'en')
            English
        @else
            ქართული
        @endif
        <ul x-show="isOpen" @click.away="isOpen = false" class="absolute -ml-16 rounded-lg mt-9">
            @if (session()->get('lang') === 'en')
                <li class="p-2 mt-2">
                    <a href="{{ route('change-lang', 'ka') }}"
                        class="w-32 p-2 border rounded-lg cursor-pointer text-dark-100 hover:bg-brand-secondary hover:text-dark-fff">ქართული</a>
                </li>
            @else
                <li class="p-2 mt-2">
                    <a href="{{ route('change-lang', 'en') }}"
                        class="w-32 p-2 px-20 border rounded-lg cursor-pointer hover:bg-brand-secondary hover:text-dark-fff text-dark-100">English</a>
                </li>

            @endif
        </ul>
        <div class="w-3 h-3 mt-2 ml-2">
            <img src="{{ asset('img/dropdown.svg') }}" alt="dropdown">
        </div>
    </button>
</div>
