<div>

    <div x-data="{isOpen:false}">
        <button @click="isOpen = !isOpen" class="relative flex w-full p-2 px-4 py-2 mt-40 mr-40 bg-gray-500 border-none text-16 ml-30 h-11 rounded-xl">
            @if(session()->get('lang') === "en")
                English
            @else
                ქართული
            @endif
            <ul
            x-show="isOpen"
            @click.away="isOpen = false"
            class="absolute flex rounded-lg -ml-80 mt-9">
                <li class="p-2">
                    <a href="{{ route('change-lang','en') }}" class="w-32 p-2 px-20 border rounded-lg cursor-pointer text-dark-100 hover:bg-brand-secondary hover:text-dark-fff">English</a>
                </li>
                <li class="p-2">
                    <a href="{{ route('change-lang','ka') }}" class="w-32 p-2 border rounded-lg cursor-pointer text-dark-100 hover:bg-brand-secondary hover:text-dark-fff">ქართული</a>
                </li>
            </ul>
           <div class="mt-2 ml-2">
            <img src="{{ asset('img/dropdown.svg') }}" alt="">
           </div>
        </button>
    </div>

</div>




