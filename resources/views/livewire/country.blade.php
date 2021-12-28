@extends('livewire.dashboard')
@section('content')
<div class=" px-108">
    <div class="mt-40 mb-56 shadow-md">
        <table class="w-full rounded-lg ">
            <thead class="flex w-full bg-dark-4">
                <tr class="flex w-full ">
                    <th scope="col" class="w-1/4 py-20 font-semibold text-dark-100 text-xxs">
                        Location
                        {{-- <div class="px-2 py-1 ">
                            <button> <img src="{{ asset('img/asc.svg') }}" alt="" class="mb-1"></button>
                            <button><img src="{{ asset('img/desc.svg') }}" alt=""></button>
                        </div> --}}
                    </th>
                    <th scope="col" class="w-1/4 py-20 font-semibold text-dark-100 text-xxs">
                        New cas
                        {{-- <div class="px-2 py-1 ">
                            <button> <img src="{{ asset('img/asc.svg') }}" alt="" class="mb-1"></button>
                            <button><img src="{{ asset('img/desc.svg') }}" alt=""></button>
                        </div> --}}
                    </th>
                    <th scope="col" class="w-1/4 py-20 font-semibold text-dark-100 text-xxs">
                        Deaths
                    </th>
                    <th scope="col" class="w-1/4 py-20 font-semibold text-dark-100 text-xxs">
                        Recovered
                    </th>
                </tr>
            </thead>
            <tbody class="flex flex-col overflow-y-scroll divide-y h-500 bg-dark-fff divide-dark-4">
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>
                <tr class="flex items-center w-full text-center">
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        Georiga
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        452323
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        0
                    </td>
                    <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs">
                        2324
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection
