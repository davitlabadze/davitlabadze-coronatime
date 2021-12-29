<div>
    <div class="flex ">
        <div class="w-full ml-108 sm:ml-16 ">
            <form action="#" wire:submit.prevent="submit">
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 sm:mt-24 ">
                <div class="mt-30 sm:mt-43">
                    <h1 class="font-black text-dark-100 text-xxl">Welcome back</h1>
                    <p class="mt-16 font-normal text-dark-60 sm:mt-8">Please enter required info to sign up</p>
                    <div class="mt-24">
                        <label for="username" class="block font-bold text-dark-100 text-xxs">Username</label>
                        <input id="name" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-0 @error('name') border-2 border-system-error  @enderror"  type="name" wire:model="name" placeholder="Enter unique username" value="{{ old('name') }}" required autocomplete="name"  />
                        @error('name') <span class="text-system-error">{{ $message }}</span> @enderror

                    </div>
                    <div class="mt-24">
                        <label for="email" class="block font-bold text-dark-100 text-xxs">Email</label>
                        <input id="email" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-0 @error('email') border-2 border-system-error  @enderror" type="email" wire:model="email" placeholder="Enter your email" />
                        @error('email') <span class="text-system-error"">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-24">
                        <label for="password" class="block font-bold text-dark-100 text-xxs">Password</label>
                        <input id="password" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-0 @error('password') border-2 border-system-error  @enderror" type="password" wire:model="password" placeholder="Fill in password" />
                        @error('password') <span class="text-system-error"">{{ $message }}</span> @enderror
                    </div>
                    <div class="mt-24">
                        <label for="confir-password" class="block font-bold text-dark-100 text-xxs">Repeat Password</label>
                        <input id="password-confirmation" class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343 outline-0 @error('password_confirmation') border-2 border-system-error  @enderror" type="password" wire:model="password_confirmation" placeholder="Repeat password" />
                        @error('password_confirmation') <span class="text-system-error"">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" value="register" class="h-56 rounded-lg bg-brand-secondary w-392 mt-26 sm:w-343 outline-0"><p class="font-black text-dark-fff">SIGN UP</p></button>
                    <div class="flex items-center justify-center mt-24 -ml-20 w-96 sm:">
                        <p class="font-normal text-dark-60">Already have an account?</p>
                        <a href="{{ route('login') }}" class="font-bold text-dark-100">Log in</a>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('/img/rectangle1.png') }}" alt="covid19" class="w-full h-full sm:hidden ">
    </div>
</div>
