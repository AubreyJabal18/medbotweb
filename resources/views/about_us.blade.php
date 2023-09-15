<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="{{asset('images/favicon.ico')}}">
    @vite('resources/css/app.css')
</head>
<body>
    
    <!-- <div class="w-full flex flex-col relative bg-[url('../images/homepage-top-banner.png')] bg-contain bg-origin-border bg-no-repeat h-[900px] md:h-[1000px] overflow-hidden"> -->
    <div class="flex flex-col w-screen h-fit lg:h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] ">

        {{-- <img src="{{asset('images/homepage/homepage-top-banner.svg')}}" alt="" class="absolute hidden -z-50 md:-translate-y-32 lg:block w-screen"> --}}

        <!-- Navbar -->
        <div class="flex flex-row justify-center items-center space-x-2 px-8 py-5 md:justify-end">
            <p class="font-roboto font-bold text-lg md:text-xl text-[#5ECECD] text-shadow text-center ">ENHANCED MED-BOT</p>
            <a href="/">
                <img src="{{asset('images/homepage/logo2.png')}}" alt="" class="align-self-start h-[50px] w-[50px]">
            </a>
        </div>

    
        <div class="flex flex-col space-y-1 md:space-y-2 items-center">
            <p class="font-roboto font-normal text-center text-lg text-white md:text-4xl">TEAM MEMBERS</p>
            <p class="font-roboto font-normal text-center text-base text-white ml-1 md:text-2xl">____________</p>
           
        </div>
        {{-- <img src="{{asset('images/homepage/model_front_view.png')}}" alt="" class="absolute hidden md:block md:h-[30%] md:w-[25%] lg:h-[38%] md:w-[25%] right-4 bottom-4"> --}}
       
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 ">
            <div class="grid flex-col space-y-1">
                <img src="{{asset('images/dashboard/aubrey.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">AUBREY M. JABAL</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Ihatub, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09109791138</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">aubreyjabal12345@gmail.com</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/aubrey.jabal</p>   
            </div>

            <div class="grid flex-col space-y-1">
                <img src="{{asset('images/dashboard/aubrey.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">RYLENE GRACE L. SACRO</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Ihatub, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09777339380</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">rylenesacro@gmail.com</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/rylene.lastima</p>   
            </div>
            
            <div class="grid flex-col space-y-1">
                <img src="{{asset('images/dashboard/aubrey.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">JOMEL CHRISTIAN H. SOLOMON</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Tanza, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09497359355</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">jomelsolomon@gmail.com
                </p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/bradwaren24/</p>   
            </div>

            <div class="grid flex-col space-y-1">
                <img src="{{asset('images/dashboard/aubrey.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">ADRIAN O. VILLARUEL</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Dili, Gasan, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09777390963</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">adrianvillaruel17@gmail.com
                </p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/adrian.villaruel.5855</p>   
            </div>

        </div>












    </div>


      
    
</body>
</html>