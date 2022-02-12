<div>
    <div class="flex ">
        <div class="w-full ml-108 sm:ml-16 ">
            <x-header/>
            <form action="#" wire:submit.prevent="submit">
                <div class="mt-30 sm:mt-43">
                    <h1 class="font-black text-dark-100 text-xxl">{{ __('Welcome to Coronatime') }}</h1>
                    <p class="mt-16 font-normal text-dark-60 sm:mt-8">{{ __("Please enter required info to sign up") }}</p>
                    <div class="mt-24">
                        <label for="username" class="block font-bold text-dark-100 text-xxs">{{ __("Username") }}</label>
                        <input
                        id="name"
                        class="outline-brand-primery h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343
                        @error('name') border-2 border-system-error  @enderror
                        @if(!$errors->has('name') && Str::length($name) >=3)
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="name"
                        wire:model="name"
                        placeholder="{{ __("Enter unique username") }}"
                        value="{{ old('name') }}"
                        required autocomplete="name"  />
                        @error('name')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror

                    </div>
                    <div class="mt-24">
                        <label for="email" class="block font-bold text-dark-100 text-xxs">{{ __("Email") }}</label>
                        <input
                        id="email"
                        class=" h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-brand-primery
                        @error('email') border-2 border-system-error  @enderror
                        @if(!$errors->has('email') && Str::length($email) >=3 )
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="email"
                        wire:model="email"
                        placeholder="{{ __("Enter your email") }}" />
                        @error('email')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror
                    </div>
                    <div class="mt-24">
                        <label for="password" class="block font-bold text-dark-100 text-xxs">{{ __("Password") }}</label>
                        <input id="password" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-brand-primery
                        @error('password') border-2 border-system-error  @enderror
                        @if(!$errors->has('password') && Str::length($password) >=3)
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="password" wire:model="password" placeholder="{{ __("Fill in password") }}" />
                        @error('password')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror
                    </div>
                    <div class="mt-24">
                        <label for="confir-password" class="block font-bold text-dark-100 text-xxs">{{ __("Repeat Password") }}</label>
                        <input id="password-confirmation" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-brand-primery
                        @error('password_confirmation') border-2 border-system-error  @enderror
                        @if(!$errors->has('password_confirmation') && Str::length($password_confirmation) >=3)
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="password" wire:model="password_confirmation" placeholder="{{ __("Repeat Password") }}" />
                        @error('password_confirmation')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror
                    </div>
                    <button type="submit" value="register" class="h-56 rounded-lg bg-brand-secondary w-392 mt-26 sm:w-343 outline-0"><p class="font-black text-dark-fff">{{ __("SIGN UP") }}</p></button>
                    <div class="flex items-center justify-center mt-24 -ml-20 w-96 sm:">
                        <p class="font-normal text-dark-60">{{ __("Already have an account?") }}</p>
                        <a href="{{ route('login',app()->getLocale()) }}" class="font-bold text-dark-100">{{ __("Log in") }}</a>
                    </div>
                </div>
            </form>
        </div>
        <x-image/>
    </div>
</div>
