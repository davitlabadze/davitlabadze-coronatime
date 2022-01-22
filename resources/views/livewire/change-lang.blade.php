<div>
    <div x-data="{isOpen:false}">
        <button @click="isOpen = !isOpen" class="relative flex w-auto h-auto p-2 px-4 py-2 mt-12 mr-0 bg-gray-500 border-none text-16 ml-30 rounded-xl">
            @if(session()->get('lang') === "en")
                English
            @else
                ქართული
            @endif
            <ul
            x-show="isOpen"
            @click.away="isOpen = false"
            class="absolute w-auto h-auto p-2 rounded-lg -ml-9 mt-9 bg-dark-60 ">
                <li class="p-2">
                    <a href="{{ route('change-lang','en') }}" class="w-32 p-2 px-20 border rounded-lg cursor-pointer text-dark-100 hover:bg-brand-secondary hover:text-dark-fff">English</a>
                </li>
                <li class="p-2 mt-2">
                    <a href="{{ route('change-lang','ka') }}" class="w-32 p-2 border rounded-lg cursor-pointer text-dark-100 hover:bg-brand-secondary hover:text-dark-fff">ქართული</a>
                </li>
            </ul>
           <div class="w-6 h-6 mt-2 ml-2">
            <img src="{{ asset('img/dropdown.svg') }}" alt="">
           </div>
        </button>
    </div>

</div>




