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
    
    <div class="flex flex-col w-screen h-fit lg:h-screen bg-gradient-to-r from-[#5B86E5] to-[#305AB9]">

        <div class="flex flex-row justify-center items-center space-x-2 px-8 py-5 md:justify-start">
            <a href="/">
                <img src="{{asset('images/LOGO.png')}}" alt="" class=" h-[50px] w-[50px]">
            </a>
            <p class="font-roboto font-bold text-lg md:text-xl text-[#5ECECD] text-shadow text-center ">ENHANCED MED-BOT</p>
        </div>


        <div class="flex flex-row justify-center space-x-5 items-center">
            <img src="{{asset('images/front view.png')}}" alt="" class="w-20 h-28 md:w-32 md:h-48">
            <p class="font-roboto font-normal text-center text-lg text-white md:text-4xl underline">THE RESEARCHERS</p>
        </div>
       
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 justify-center my-5 ">

            <div class="flex flex-col">
                <img src="{{asset('images/about/idpic1.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">AUBREY M. JABAL</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Ihatub, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09109791138</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">aubreyjabal12345@gmail.com</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/aubrey.jabal</p>   
            </div>

            <div class="flex flex-col">
                <img src="{{asset('images/about/idpic2.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">RYLENE GRACE L. SACRO</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Ihatub, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09777339380</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">rylenesacro@gmail.com</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/rylene.lastima</p>   
            </div>

            <div class="flex flex-col">
                <img src="{{asset('images/about/idpic3.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">JOMEL CHRISTIAN H. SOLOMON</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Tanza, Boac, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09497359355</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">jomelsolomon@gmail.com</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/bradwaren24</p>   `
            </div>

            <div class="flex flex-col">
                <img src="{{asset('images/about/idpic4.png')}}" alt="">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">ADRIAN O. VILLARUEL</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">Dili, Gasan, Mariduque</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">09777390963</p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">adrianvillaruel17@gmail.com
                </p>
                <p class="font-roboto font-normal text-center text-base text-white md:text-1xl">www.facebook.com/adrian.villaruel.5855</p>   
            </div>
        </div>

</body>
</html>