<div>
    <div>
        <h1 class="py-40 font-black ml-108 sm:ml-2 text-xxl sm:text-xxs">@if ($status === 'worldwind') {{ __("Worldwide Statistics") }} @else {{ __("Statistics by country") }} @endif</h1>
    </div>
    <div class="p-2 -mt-20 border-b border-b-dark-4 ml-108 sm:ml-0">
        <ul class="flex">
            <li >
                <a
                href="#"
                wire:click.prevent="setStatus('worldwind')"
                class="sm:text-s @if ($status === 'worldwind') font-black p-2 border-b-4 border-b-dark-100 @endif">{{ __("Worldwide") }}</a>
            </li>
            <li class="ml-72 ">
                <a
                href="#"
                wire:click.prevent="setStatus('country')"
                class="sm:text-s @if ($status === 'country')  font-black p-2 border-b-4 border-b-dark-100 @endif">{{ __("By country") }}</a>
            </li>
        </ul>
    </div>
</div>
