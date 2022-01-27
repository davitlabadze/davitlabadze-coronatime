@extends('livewire.dashboard')
@section('content')
<div class="px-108 sm:px-0">
    <div class="mt-40">
        <input type="text" name="search" id="search" placeholder="Search by country" class="p-4 px-10 bg-no-repeat border sm:w-full border-dark-60 bg-left-1 bg bg-search rounded-xl sm:border-none sm:mt-0 sm:rounded-none outline-brand-primery"/>
    </div>
    <div class="mt-40 mb-56 shadow-md sm:mt-20">
        <table class="w-full rounded-lg sm:w-96">
            <thead class="flex w-full bg-dark-4 sm:w-96 ">
                <tr class="flex w-full">
                    <th scope="col" class="flex justify-center w-1/4 py-20 font-semibold text-dark-100 text-xxs sm:text-ss">
                        {{ __("Location") }}
                        <div class="py-1 ml-2">
                            <a class="mt-2"><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                            <a ><img src="{{ asset('img/adesc.svg') }}" alt="down"></a>
                        </div>
                    </th>
                    <th scope="col" class="flex justify-center w-1/4 py-20 font-semibold text-dark-100 text-xxs sm:text-ss">
                        {{ __("New cases") }}
                        <div class="py-1 ml-2">
                            <a class="mt-2"><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                            <a ><img src="{{ asset('img/adesc.svg') }}" alt="down"></a>
                        </div>
                    </th>
                    <th scope="col" class="flex justify-center w-1/4 py-20 font-semibold text-dark-100 text-xxs sm:text-ss">
                        {{ __("Deaths") }}
                        <div class="py-1 ml-2">
                            <a class="mt-2"><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                            <a ><img src="{{ asset('img/adesc.svg') }}" alt="down"></a>
                        </div>
                    </th>
                    <th scope="col" class="flex justify-center w-1/4 py-20 font-semibold text-dark-100 text-xxs sm:text-ss">
                        {{ __("Recovered") }}
                        <div class="py-1 ml-2">
                            <a class="mt-2"><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                            <a ><img src="{{ asset('img/adesc.svg') }}" alt="down"></a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody class="flex flex-col overflow-y-scroll divide-y h-500 bg-dark-fff divide-dark-4 sm:w-96">
               @foreach ($countries as $country)
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                        {{  $country->name  }}
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                        {{  $country->statistics->confirmed  }}
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                        {{  $country->statistics->deaths  }}
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                        {{  $country->statistics->recovered  }}
                    </td>
                </tr>
               @endforeach



            </tbody>
        </table>
    </div>
</div>

@endsection
