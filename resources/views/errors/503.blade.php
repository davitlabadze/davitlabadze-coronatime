<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coronatime</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="flex ">
        <div class="px-96 mt-28">
            <div class="ml-28">
                <img src="{{ asset('/img/logo.svg') }}" alt="" class=" px-96">
            </div>
            <div class="mt-20 ">
                <div class="ml-72">
                    <img src="{{ asset('/img/503.png') }}" alt="" class=" px-52">
                </div>
                <div class="flex ml-60 mt-72">
                    <div class="">
                        <img src="{{ asset('/img/covid.png') }}" alt="" class="w-10 h-auto animate-spinreverse">
                        <img src="{{ asset('/img/covid.png') }}" alt="" class="absolute w-10 h-auto ml-3 -mt-3 animate-spin">
                    </div>
                    <div class="ml-48 font-black text-16">
                       <h1 class="flex text-brand-secondary text-xxm">
                           W
                           <b class="text-brand-tertiary">e</b>
                           <b class="text-brand-primery">&nbsp; hope the pandemic is over before </b>&nbsp;
                           <b class="text-brand-secondary">w</b>
                           <b class="text-brand-tertiary">e</b>&nbsp;
                            <b class="text-brand-primery">finish building the site.</b>
                        </h1>

                        <h1 class="mt-8 text-center text-xxl text-brand-primery"><b class="text-brand-secondary">W</b><b class="text-brand-tertiary">i</b>sh you health.</h1>
                    </div>
                    <div class="ml-48">
                        <img src="{{ asset('/img/covid.png') }}" alt="" class="w-10 h-auto animate-spin ">
                        <img src="{{ asset('/img/covid.png') }}" alt="" class="absolute w-10 h-auto -mt-3 -ml-3 animate-spinreverse">
                       </div>
                 </div>
                <div class=" ml-96">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
