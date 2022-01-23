<div>
    <div class="grid justify-items-center">
        <div class="sm:ml-16">
            <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 ml-108 sm:mt-24 sm:ml-16 ">
                <h1 class="font-black text-dark-100 text-xxl ml-108 mt-148 sm:mt-43 sm:mr-107 sm:text-xxm sm:w-full">{{ __("Reset Password") }}</h1>
            <form action="#" wire:submit.prevent="submit" method="POST">
                @csrf
                <div class="mt-56 sm:mt-40">
                    <div class="mt-24">
                        <label for="email" class="block font-bold text-dark-100 text-xxs sm:ml-16">{{ __("Email") }}</label>
                        <input id="email" name="email" wire:model="email"
                        class="h-56 p-24 mt-8 border rounded w-392 border-inner-border outline-brand-primery sm:w-343
                        @error('email') border-2 border-system-error  @enderror
                        @if(!$errors->has('email') && Str::length($email) >=3 )
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="email"
                        placeholder="{{ __("Enter your email") }}" />
                        @error('email')
                        <span class="absolute flex mt-2 text-system-error">
                            <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                           {{ __($message) }}
                       </span>
                   @enderror
                    </div>
                    <button type="submit" class="absolute h-56 mt-56 rounded-lg bg-brand-secondary w-392 sm:inset-x-0 sm:bottom-0 sm:mb-40 sm:h-48 sm:w-343 sm:ml-16"><p class="font-black text-dark-fff">{{ __("Reset Password") }}</p></button>
                </div>
            </form>
        </div>
    </div>
</div>
