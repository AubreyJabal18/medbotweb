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
    
    <div class="flex flex-col w-full h-full lg:w-screen lg:h-screen  bg-[#3fa0d6] ">

        <div class="flex flex-row justify-center items-center space-x-2 px-8 py-5 md:justify-start">
            <a href="/">
                <img src="{{asset('images/homepage/logo2.png')}}" alt="" class=" h-[50px] w-[50px]">
            </a>
            <p class="font-roboto font-bold text-lg md:text-xl text-white text-shadow text-center ">ENHANCED MED-BOT</p>
        </div>

        <div class="flex flex-col lg:flex-row relative lg:py-10 ">

            <div class="flex flex-col items-center justify-start p-2 md:pb-3 lg:py-2 ">
                <p class="font-roboto font-bold text-4xl md:text-6xl text-gray-800">ABOUT</p>
                <p class="font-roboto font-bold text-4xl md:text-6xl text-gray-800">US</p>
                <p class="font-roboto font-normal text-base text-gray-800 p-2 ml-4">We are the researchers of the Enhanced Med-bot</p>
            </div>

            
            <div class="flex flex-col lg:flex-row md:space-y-5 lg:items-center md:justify-start lg:justify-end lg:relative">
                <img src="{{asset('images/about/pic2.png')}}" alt="" class="lg:h-[230px] lg:w-[740px] hidden lg:block">
                <img src="{{asset('images/about/pic8.png')}}" alt="" class="h-[150px] w-[350px] md:h-[130px] md:w-[390px] lg:h-[270px] lg:w-[780px] block lg:hidden">
                
                    <div class="flex flex-row justify-end py-5 md:py-10">
                        <img src="{{asset('images/about/pic7.png')}}" alt="" class="h-[150px] w-[350px] md:h-[130px] md:w-[390px] lg:h-[270px] lg:w-[780px] block lg:hidden "> 
                    </div>
                
                    <img src="{{asset('images/about/pic8.png')}}" alt="" class="h-[150px] w-[350px] md:h-[130px] md:w-[390px] lg:h-[270px] lg:w-[780px] block md:hidden">
                
                    <div class="flex flex-row justify-end py-5 md:py-10">
                        <img src="{{asset('images/about/pic7.png')}}" alt="" class="h-[150px] w-[350px] md:h-[130px] md:w-[390px] lg:h-[270px] lg:w-[780px] block md:hidden "> 
                     </div>

                <div class="flex flex-row absolute py-2 px-2 top-[170px] md:top-[180px] lg:top-0 lg:left-0 md:py-1 md:px-5">
                    <img src="{{asset('images/about/pic5.png')}}" alt="" class="h-[100px] w-[100px] md:h-[120px] md:w-[100px] lg:h-[180px] lg:w-[140px]">
                    
                    <div class="flex flex-col justify-center items-center p-2 md:px-5 lg:px-0">
                        <p class="font-roboto font-normal text-base lg:text-lg text-gray-800 underline">Aubrey M. Jabal</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">Ihatub, Boac, Marinduque</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">09109791138</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">aubreyjabal12345</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 block lg:hidden">aubreyjabal12345@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">https://www.facebook</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">.com/aubrey.jabal</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 lg:hidden block">https://www.facebook.com/aubrey.jabal</p>
                    </div>
                </div>

                <div class="flex flex-row absolute py-2 right-0 top-[340px] md:right-0 md:top-[180px] lg:top-0 lg:right-5 justify-end md:px-5 lg:px-0">
                    <img src="{{asset('images/about/pic5.png')}}" alt="" class="h-[100px] w-[100px] md:h-[120px] md:w-[100px] lg:h-[180px] lg:w-[140px]">
                    
                    <div class="flex flex-col justify-center items-center p-2 md:px-3 lg:px-0">
                        <p class="font-roboto font-normal text-base lg:text-lg text-gray-800 underline">Rylene Grace L. Sacro</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">Ihatub, Boac, Marinduque</p>                        
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">09777339380</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">rylenesacro</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 block lg:hidden">rylenesacro@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">https://www.facebook</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">.com/rylene.lastima</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 lg:hidden block">https://www.facebook.com/rylene.lastima</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:py-5 lg:relative">
            <div class="flex flex-col items-center justify-end lg:relative ">
                <img src="{{asset('images/about/pic3.png')}}" alt="" class="h-[273px] w-[780px] md:h-[273px] md:w-[780px] lg:h-[230px] lg:w-[740px] hidden lg:block">

                <div class="flex flex-row absolute left-0 px-2 top-[610px] md:px-5 md:left-0 md:top-[485px] lg:top-7 lg:left-7 justify-start lg:px-0">
                    <img src="{{asset('images/about/pic5.png')}}" alt="" class="h-[100px] w-[100px] md:h-[120px] md:w-[100px] lg:h-[180px] lg:w-[140px]">
                    
                    <div class="flex flex-col justify-center items-center px-2 md:px-5 lg:px-0">
                        <p class="font-roboto font-normal text-base md:text-base lg:text-lg text-gray-800 underline">Adrian O. Villaruel</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800">Dili, Gasan, Marinduque</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800">09777390963</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 hidden lg:block">adrianvillaruel17</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 hidden lg:block">@gmail.com</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 lg:hidden block">adrianvillaruel17@gmail.com</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 hidden lg:block">https://www.facebook</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 hidden lg:block">.com/adrian.villaruel</p>
                        <p class="font-roboto font-normal text-xs md:text-xs lg:text-sm text-gray-800 lg:hidden block">https://www.facebook.com/adrian.villaruel</p>
                    </div>
                </div>

                <div class="flex flex-row absolute p-2 right-0 top-[770px] md:right-0 md:top-[485px] lg:top-7 lg:right-10 justify-end lg:px-0">
                    <img src="{{asset('images/about/pic5.png')}}" alt="" class="h-[100px] w-[100px] md:h-[120px] md:w-[100px] lg:h-[180px] lg:w-[140px]">
                    
                    <div class="flex flex-col justify-center items-center px-2 md:px-5 lg:px-0">
                        <p class="font-roboto font-normal text-base lg:text-lg text-gray-800 underline">Jomel Christian H. Solomon</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">Tanza, Boac, Marinduque</p>                        
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800">09497359355</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">jomelsolomon</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 lg:hidden block">jomelsolomon@gmail.com</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">https://www.facebook</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 hidden lg:block">.com/bradwaren24</p>
                        <p class="font-roboto font-normal text-xs lg:text-sm text-gray-800 lg:hidden block">https://www.facebook.com/bradwaren24</p>
                    </div>
                </div>
            </div>

            <div class="absolute right-5 top-5 hidden sm:hidden md:hidden lg:block">
                <img src="{{asset('images/dashboard/model.png')}}" alt="" class="h-[240px] w-[240px]"> 
            </div>
            
            
        </div>
    </div>

</body>
</html>