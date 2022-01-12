<div>
    <div>
        <h1 class="py-40 font-black ml-108 text-xxl">@if ($status === 'worldwind') {{ __("Worldwide Statistics") }} @else {{ __("Statistics by country") }} @endif</h1>
    </div>
    <div class="p-2 border-b border-b-dark-4 px-108">
        <ul class="flex">
            <li >
                <a
                href="#"
                wire:click.prevent="setStatus('worldwind')"
                class="@if ($status === 'worldwind') font-black p-2  border-b-4 border-b-dark-100 @endif">Worldwide</a>
            </li>
            <li class="ml-72">
                <a
                href="#"
                wire:click.prevent="setStatus('country')"
                class="@if ($status === 'country')  font-black p-2  border-b-4 border-b-dark-100 @endif">By country</a>
            </li>
        </ul>
    </div>
</div>
