@extends('livewire.dashboard')
@section('content')
    <div class="px-108 sm:px-0">
        <div class="mt-40">
            <input type="text" name="search" wire:model="search" type="search" id="search" placeholder="Search by country"
                class="p-4 px-10 bg-no-repeat border sm:w-full border-dark-60 bg-left-1 bg bg-search rounded-xl sm:border-none sm:mt-0 sm:rounded-none outline-brand-primery" />
        </div>
        <div class="mt-40 mb-56 shadow-md sm:mt-20">
            <table class="w-full rounded-lg sm:w-96">
                <thead class="flex w-full bg-dark-4 sm:w-96 ">
                    <tr class="flex w-full">
                        <th wire:click.prevent="sortBy('name')" scope="col"
                            class="flex justify-center w-1/4 py-20 font-semibold cursor-pointer text-dark-100 text-xxs sm:text-ss">
                            {{ __('Location') }}
                            <div class="py-1 ml-2">
                                @if ($sortDirectionAsc && $sortBy === 'name')
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up"></a>
                                @elseif(!$sortDirectionAsc && $sortBy === 'name')
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up" class="rotate-180"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @else
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @endif
                            </div>
                        </th>
                        <th wire:click.prevent="sortBy('confirmed')" scope="col"
                            class="flex justify-center w-1/4 py-20 font-semibold cursor-pointer text-dark-100 text-xxs sm:text-ss">
                            {{ __('New cases') }}
                            <div class="py-1 ml-2">
                                @if ($sortDirectionAsc && $sortBy === 'confirmed')
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up"></a>
                                @elseif(!$sortDirectionAsc && $sortBy === 'confirmed')
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up" class="rotate-180"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @else
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @endif
                            </div>
                        </th>
                        <th wire:click.prevent="sortBy('deaths')" scope="col"
                            class="flex justify-center w-1/4 py-20 font-semibold cursor-pointer text-dark-100 text-xxs sm:text-ss">
                            {{ __('Deaths') }}
                            <div class="py-1 ml-2">
                                @if ($sortDirectionAsc && $sortBy === 'deaths')
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up"></a>
                                @elseif(!$sortDirectionAsc && $sortBy === 'deaths')
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up" class="rotate-180"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @else
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @endif
                            </div>
                        </th>
                        <th wire:click.prevent="sortBy('recovered')" scope="col"
                            class="flex justify-center w-1/4 py-20 font-semibold cursor-pointer text-dark-100 text-xxs sm:text-ss">
                            {{ __('Recovered') }}
                            <div class="py-1 ml-2">
                                @if ($sortDirectionAsc && $sortBy === 'recovered')
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up"></a>
                                @elseif(!$sortDirectionAsc && $sortBy === 'recovered')
                                    <a><img src="{{ asset('img/checkfilter.svg') }}" alt="up" class="rotate-180"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @else
                                    <a><img src="{{ asset('img/asc.svg') }}" alt="up"></a>
                                    <a><img src="{{ asset('img/desc.svg') }}" alt="down"></a>
                                @endif
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="flex flex-col overflow-y-scroll divide-y h-500 bg-dark-fff divide-dark-4 sm:w-96">
                    @forelse ($countries as $country)
                        <tr class="flex items-center w-full text-center">
                            <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                                {{ $country->name }}
                            </td>
                            <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                                {{ $country->statistics->confirmed }}
                            </td>
                            <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                                {{ $country->statistics->deaths }}
                            </td>
                            <td class="w-1/4 px-40 py-16 font-normal text-dark-100 text-xxs sm:text-ss">
                                {{ $country->statistics->recovered }}
                            </td>
                        </tr>
                    @empty
                        <tr class="flex items-center w-full text-center">
                            <td class="w-full px-40 font-normal py-164 text-dark-100 text-xxs sm:text-ss">
                                {{ __('Information not found') }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
