<div>
    <div class="flex ">
        <div class="ml-108 sm:ml-16 w-full ">
            <form action="#">
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" class="mt-40 sm:mt-24 ">
                <div class="mt-30 sm:mt-43">
                    <h1 class="text-dark-100 text-xxl font-black">Welcome back</h1>
                    <p class="text-dark-60 font-normal mt-16 sm:mt-8">Welcome back! Please enter your details</p>
                    <div class="mt-24">
                        <label for="username" class="text-dark-100 text-xxs font-bold block">Username</label>
                        <input class="mt-8 w-392 h-56 p-24 border border-inner-border rounded sm:w-343" type="text" placeholder="Enter unique username or email" />
                    </div>
                    <div class="mt-24">
                        <label for="password" class="text-dark-100 text-xxs font-bold block">Password</label>
                        <input class="mt-8 w-392 h-56 p-24 border border-inner-border rounded sm:w-343" type="password" placeholder="Fill in password" />
                    </div>
                    <div class="flex mt-25">
                       <div class="flex">
                        <input type="checkbox" class="mt-1 w-20 h-20 border-inner-border sm:mt-0"/>
                        <p class="text-dark-100 font-semibold ml-8 sm:text-xxs">Remember this device</p>
                       </div>
                        <a href="#" class="text-brand-primery font-semibold ml-30 cursor-pointer sm:text-xxs ml-42">Forgot password?</a>
                    </div>
                    <button type="submit" class="bg-brand-secondary w-392 h-56 rounded-lg mt-26 sm:w-343"><p class="text-dark-fff font-black">LOG IN</p></button>
                    <div class="flex items-center justify-center mt-24 w-96 sm: -ml-20">
                        <p class="text-dark-60 font-normal">Don't have and account?</p>
                        <a href="{{ route('register') }}" class="text-dark-100 font-bold">Sign up for free</a>
                    </div>
                </div>
            </form>
        </div>
        <img src="{{ asset('/img/rectangle1.png') }}" alt="covid19" class="h-full w-full sm:hidden">
    </div>
</div>
