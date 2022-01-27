@extends('livewire.dashboard')
@section('content')
<div>
    <ul class="mt-40 ml-108 mr-108 sm:ml-2 sm:mr-2">
        <li class="flex justify-between text-center sm:grid sm:grid-cols-2 ">
            <div class="items-center justify-center rounded-lg h-255 bg-cases w-392 sm:w-full sm:h-193 sm:col-span-2">
                <img src="{{ asset('img/cases.svg') }}" alt="cases" class="mt-40 ml-151 sm:px-4 sm:ml-28 sm:mt-2">
                <h3 class="mt-24 font-medium">{{ __("New cases") }}</h3>
                <h1 class="mt-16 font-black text-megaxxl text-brand-primery">{{ $confirmed }}</h1>
            </div>
            <div class="rounded-lg h-255 bg-recoverd w-392 sm:w-164 sm:h-193 sm:mt-2 sm">
                <img src="{{ asset('img/recoverd.svg') }}" alt="recoverd" class="mt-55 ml-151 sm:ml-9 sm:mt-2 sm:py-2">
                <h3 class="mt-24 font-medium">{{ __("Recovered") }}</h3>
                <h1 class="mt-24 font-black text-megaxxl text-brand-secondary">{{ $recovered }}</h1>

            </div>
            <div class="rounded-lg h-255 bg-death w-392 sm:w-164 sm:h-193 sm:mt-2 sm:ml-2">
                <img src="{{ asset('img/death.svg') }}" alt="death" class="mt-53.5 ml-151 sm:ml-9 sm:mt-2 sm:py-2" >
                <h3 class="mt-24 font-medium">{{ __("Deaths") }}</h3>
                <h1 class="mt-16 font-black text-megaxxl text-brand-tertiary">{{ $deaths }}</h1>

            </div>
        </li>
      </ul>
</div>

@endsection
