<div>
    <div class="flex ">
        <div class="w-full ml-108 sm:ml-16 ">
            <x-header/>
            <form action="#" wire:submit.prevent="submit">
                @csrf
                <div class="mt-30 sm:mt-43">
                    <h1 class="font-black text-dark-100 text-xxl">{{__('Welcome back') }}</h1>
                    <p class="mt-16 font-normal text-dark-60 sm:mt-8">{{ __('Welcome back! Please enter your details') }}</p>
                    <div class="mt-24">
                        <label for="username" class="block font-bold text-dark-100 text-xxs">{{ __('Username') }}</label>
                        <input
                        class="outline-brand-primery h-56 p-24 mt-8 border rounded w-392 border-inner-border  sm:w-343
                        @error('name') border-2 border-system-error  @enderror
                        @if(Str::length($name) >=3)
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="text"
                        placeholder="{{ __('Enter unique username or email') }}"
                        wire:model="name" />
                        @error('name')
                             <span class="flex mt-2 text-system-error">
                                 <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                                {{ __($message) }}
                            </span>
                        @enderror

                    </div>
                    <div class="mt-24">
                        <label for="password" class="block font-bold text-dark-100 text-xxs">{{ __('Password') }}</label>
                        <input class="outline-brand-primery h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343
                        @error('password') border-2 border-system-error  @enderror
                        @if(Str::length($password) >=3)
                        border-2 border-system-succes bg-success bg-no-repeat bg-right-1 sm:bg-right-sm
                        @endif"
                        type="password" placeholder="{{ __('Fill in password') }}"  wire:model="password"/>
                        @error('password')
                        <span class="flex mt-2 text-system-error">
                            <img src="{{ asset('img/validate/error.svg') }}" alt="error icon" class="mr-2">
                           {{ __($message) }}
                       </span>
                   @enderror
                    </div>
                    <div class="flex mt-25">
                       <div class="flex">
                        <input type="checkbox" class="w-20 h-20 mt-1 border-inner-border accent-system-succes focus:accent-system-succes sm:mt-0"/>
                        <p class="ml-8 font-semibold text-dark-100 sm:text-xxs">{{ __('Remember this device') }}</p>
                       </div>
                        <a href="{{ route('password.request',app()->getLocale()) }}" class="font-semibold cursor-pointer text-brand-primery ml-30 sm:text-xxs ml-42">{{ __('Forgot password?') }}</a>
                    </div>
                    <button type="submit" class="h-56 rounded-lg bg-brand-secondary w-392 mt-26 sm:w-343"><p class="font-black text-dark-fff">{{ __('LOG IN') }}</p></button>
                    <div class="flex items-center justify-center mt-24 -ml-20 w-96 sm:">
                        <p class="font-normal text-dark-60">{{ __("Don't have and account?") }}</p>
                        <a href="{{ route('register',app()->getLocale()) }}" class="font-bold text-dark-100">{{ __("Sign up for free") }}</a>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('/img/rectangle1.png') }}" alt="covid19" class="w-full h-full sm:hidden">
    </div>
</div>
