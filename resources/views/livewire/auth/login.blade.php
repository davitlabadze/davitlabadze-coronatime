<div>
    <div class="flex ">
        <div class="w-full ml-108 sm:ml-16 ">
            <form action="#" wire:submit.prevent="submit">
                @csrf
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 sm:mt-24 ">
                <div class="mt-30 sm:mt-43">
                    <h1 class="font-black text-dark-100 text-xxl">Welcome back</h1>
                    <p class="mt-16 font-normal text-dark-60 sm:mt-8">Welcome back! Please enter your details</p>
                    <div class="mt-24">
                        <label for="username" class="block font-bold text-dark-100 text-xxs">Username</label>
                        <input class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343" type="text" placeholder="Enter unique username or email"  wire:model="name" />
                        @error('name') <span class="text-system-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-24">
                        <label for="password" class="block font-bold text-dark-100 text-xxs">Password</label>
                        <input class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343" type="password" placeholder="Fill in password"  wire:model="password"/>
                        @error('password') <span class="text-system-error">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex mt-25">
                       <div class="flex">
                        <input type="checkbox" class="w-20 h-20 mt-1 border-inner-border sm:mt-0"/>
                        <p class="ml-8 font-semibold text-dark-100 sm:text-xxs">Remember this device</p>
                       </div>
                        <a href="{{ route('password.request') }}" class="font-semibold cursor-pointer text-brand-primery ml-30 sm:text-xxs ml-42">Forgot password?</a>
                    </div>
                    <button type="submit" class="h-56 rounded-lg bg-brand-secondary w-392 mt-26 sm:w-343"><p class="font-black text-dark-fff">LOG IN</p></button>
                    <div class="flex items-center justify-center mt-24 -ml-20 w-96 sm:">
                        <p class="font-normal text-dark-60">Don't have and account?</p>
                        <a href="{{ route('register') }}" class="font-bold text-dark-100">Sign up for free</a>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('/img/rectangle1.png') }}" alt="covid19" class="w-full h-full sm:hidden">
    </div>
</div>
