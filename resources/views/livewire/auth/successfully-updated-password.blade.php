<div>
    <div class="grid mt-40">
        <div class="grid justify-items-center sm:ml-16 sm:justify-start">
            <img src="{{ asset('/img/logo.svg') }}" alt="logo" >
        </div>
        <div class="grid justify-items-center mt-252 sm:mt-214">
            <img src="{{ asset('/img/checked.svg') }}" alt="logo">
            <h1 class="mt-16 font-normal text-center text-dark-100">{{ __("Your password has been updated successfully") }}</h1>

        </div>
        <div class="grid justify-items-center sm:mt-214">
            <form action="{{ route('login') }}">
                <button type="submit" class="h-56 rounded-lg mt-94 bg-brand-secondary w-392 sm:absolute sm:inset-x-0 sm:bottom-0 sm:mb-40 sm:h-48 sm:w-343 sm:ml-16"><p class="font-black text-dark-fff">{{ __("SIGN IN") }}</p></button>
            </form>
        </div>
    </div>
</div>
