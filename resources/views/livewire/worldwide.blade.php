@extends('livewire.dashboard')
@section('content')
<div>
    <ul class="mt-40 ml-108 mr-108">
        <li class="flex justify-between text-center">
            <div class="items-center justify-center rounded-lg h-255 bg-cases w-392 ">
                <img src="{{ asset('img/cases.svg') }}" alt="cases" class="mt-40 ml-151">
                <h3 class="mt-24 font-medium">{{ __("New cases") }}</h3>
                <h1 class="mt-16 font-black text-megaxxl text-brand-primery">715,523</h1>
            </div>
            <div class="rounded-lg h-255 bg-recoverd w-392">
                <img src="{{ asset('img/recoverd.svg') }}" alt="recoverd" class="mt-55 ml-151">
                <h3 class="mt-24 font-medium">{{ __("Recovered") }}</h3>
                <h1 class="mt-24 font-black text-megaxxl text-brand-secondary">72,005</h1>

            </div>
            <div class="rounded-lg h-255 bg-death w-392">
                <img src="{{ asset('img/death.svg') }}" alt="death" class="mt-53.5 ml-151">
                <h3 class="mt-24 font-medium">{{ __("Deaths") }}</h3>
                <h1 class="mt-16 font-black text-megaxxl text-brand-tertiary">8,332</h1>

            </div>
        </li>
      </ul>
</div>

@endsection
