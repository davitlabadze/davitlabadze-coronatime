<div>
    <header class="w-full border-b border-b-dark-4 h-80">
        <div class="flex ml-108 mr-108 py-19 ">
            <img src="{{ asset('img/logo.svg') }}" alt="coronatime logo">
            <div class="flex items-center justify-end w-full">
                <div class="mr-40 text-16">
                    <select name="lang" id="lang" class="border-none bg-dark-fff">
                        <option value="ka">ქართული</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <div>
                    <h1 class="font-bold text-16">Takeshi K.</h1>
                </div>
                <div class="w-1 h-32 ml-16 mr-16 bg-dark-20" ></div>
                <div>
                   <livewire:logout/>
                </div>
            </div>
        </div>
    </header>

    <div >
        <livewire:status-filter />
    </div>

   <div>
    @yield('content')
   </div>

</div>
