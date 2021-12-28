<div>
    <div class="flex ">
        <div class="w-full ml-108 sm:ml-16 ">
            <form action="#">
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 sm:mt-24 ">
                <div class="mt-30 sm:mt-43">
                    <h1 class="font-black text-dark-100 text-xxl">Welcome back</h1>
                    <p class="mt-16 font-normal text-dark-60 sm:mt-8">Please enter required info to sign up</p>
                    <div class="mt-24">
                        <label for="username" class="block font-bold text-dark-100 text-xxs">Username</label>
                        <input class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343" type="text" placeholder="Enter unique username or email" />
                    </div>
                    <div class="mt-24">
                        <label for="password" class="block font-bold text-dark-100 text-xxs">Password</label>
                        <input class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343" type="password" placeholder="Fill in password" />
                    </div>
                    <div class="mt-24">
                        <label for="password1" class="block font-bold text-dark-100 text-xxs">Repeat Password</label>
                        <input class="h-56 p-24 mt-8 border rounded w-392 border-inner-border sm:w-343" type="password" placeholder="Repeat password" />
                    </div>
                    <div class="flex mt-25">
                       <div class="flex">
                        <input type="checkbox" class="w-20 h-20 mt-1 border-inner-border sm:mt-0"/>
                        <p class="ml-8 font-semibold text-dark-100 sm:text-xxs">Remember this device</p>
                       </div>

                    </div>
                    <button type="submit" class="h-56 rounded-lg bg-brand-secondary w-392 mt-26 sm:w-343"><p class="font-black text-dark-fff">SIGN UP</p></button>
                    <div class="flex items-center justify-center mt-24 -ml-20 w-96 sm:">
                        <p class="font-normal text-dark-60">Don't have and account?</p>
                        <a href="{{ route('login') }}" class="font-bold text-dark-100">Log in</a>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('/img/rectangle1.png') }}" alt="covid19" class="w-full h-full sm:hidden ">
    </div>
</div>
