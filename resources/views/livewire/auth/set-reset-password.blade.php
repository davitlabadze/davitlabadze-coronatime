<div>
    <div class="grid justify-items-center">
        <div class="sm:ml-16">
            <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 ml-108 sm:mt-24 sm:ml-16 ">
                <h1 class="font-black text-dark-100 text-xxl ml-108 mt-148 sm:mt-43 sm:mr-107 sm:text-xxm">{{ __("Reset Password") }}</h1>
            <form action="#" wire:submit.prevent="submit" method="post">
                @csrf
                <input type="hidden" name="token" wire:model="token" value="{{ $token }}"/>
                <input type="hidden" name="email" wire:model="email" value="{{ $email }}"/>
                <div class="mt-56 sm:mt-40">
                    <div class="mt-24 sm:mr-16">
                        <label for="password" class="block font-bold text-dark-100 text-xxs sm:ml-16">{{ __("New Password") }}</label>
                        <input id="password" name="password" wire:model="password" class="h-56 p-24 mt-8 border  outline-brand-primery rounded w-392 border-inner-border  sm:w-343 @error('password') border-2 border-system-error outline-none  outline-dark-fff @enderror"  type="password" placeholder="{{ __("Enter new password") }}" />
                        @error('password')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror
                    </div>
                    <div class="mt-24">
                        <label for="password_confirmation" class="block font-bold text-dark-100 text-xxs sm:ml-16">{{ __("Repeat Password") }}</label>
                        <input id="password_confirmation" wire:model="password_confirmation" name="password_confirmation" class="h-56 p-24 mt-8 border outline-brand-primery  outline-2-brand-primery rounded w-392 border-inner-border sm:w-343 @error('password_confirmation') border-2 border-system-error outline-none  outline-dark-fff  @enderror" type="password" placeholder="{{ __("Repeat Password") }}" />
                        @error('password_confirmation')
                            <span class="absolute flex mt-2 text-system-error">
                                <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="absolute h-56 mt-56 rounded-lg bg-brand-secondary w-392 sm:inset-x-0 sm:bottom-0 sm:mb-40 sm:h-48 sm:w-343 sm:ml-16"><p class="font-black text-dark-fff">{{ __("SAVE CHANGES") }}</p></button>
                </div>
            </form>
        </div>
    </div>
</div>
