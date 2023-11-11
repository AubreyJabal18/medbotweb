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
    <div class="w-full flex flex-col relative overflow-hidden bg-homepage-accent bg-cover bg-origin-border bg-no-repeat h-[900px] md:h-fit">

        {{-- <img src="{{asset('images/homepage/homepage-top-banner.svg')}}" alt="" class="absolute hidden -z-50 md:-translate-y-32 lg:block w-screen"> --}}

        <!-- Navbar -->
        <div class="flex flex-row justify-center items-center space-x-4 md:space-x-8 px-8 py-5 md:justify-end ">
            <a href="/about_us" class=" font-roboto font-medium text-sm  text-white hover:text-[#5ECECD] ">ABOUT US</a>
            <a href="/register/user" class="font-roboto font-medium text-sm  text-white hover:text-[#5ECECD] ">REGISTER</a>
            <a href="/login/upload" class="  font-roboto font-medium text-sm  text-white hover:text-[#5ECECD] ">LOGIN</a>
        </div>

        <!-- Hero -->
        <div class="h-fit flex flex-col mx-auto items-center md:flex-row ">
            <img src="{{asset('images/LOGO.png')}}" alt="" class="h-[232px] w-[258px] m-10">
            <div class="flex flex-col items-center">
                <p class="font-roboto font-bold text-3xl md:text-4xl text-[#5ECECD] text-shadow text-center lg:text-[64px]">ENHANCED MED-BOT</p>
                <p class="font-roboto font-normal text-lg md:text-xl text-white text-center lg:text-4xl my-4">“Your Ultimate ALL-in-ONE Healthcare Buddy”</p>
            </div>
        </div>
        <div class="flex flex-row space-y-4 px-4 mt-6 justify-items-center">
            <div class="flex flex-col space-y-5 items-center md:space-y-10">
                <p class="font-roboto font-normal text-center text-base text-white md:text-2xl">"We are here to assist you by offering solutions for your vital sign requirements, transforming the way you monitor your vital sign measurements."</p>
                <a href="/register/user" class="relative border border-white rounded-full bg-[#5EADD7] font-roboto font-semibold tracking-wide text-sm text-white px-4 py-3 md:text-base md:px-12 md:py-5">GET STARTED</a>
            </div>
            <img src="{{asset('images/front view.png')}}" alt="" class="h-[45%] w-[40%] m-5 md:h-[20%] md:w-[15%] md:-translate-y-24 md:m-10">
        </div> 
    </div>

    <!-- Features -->
    <div class="grid grid-cols-1 gap-10 px-10 md:grid-cols-2 md:gap-20 md:px-20">
        <div class="grid flex flex-col space-y-5 py-4 px-9 rounded-xl shadow-xl">
            <div class="flex flex-row space-x-3 items-center">
                <img src="{{asset('images/homepage/feature_1.svg')}}" alt="" class="scale-75 md:scale-100">
                <p class="font-roboto font-bold text-[#1F2937] text-xl">Vital Signs Measurement</p>
            </div>
            <p class="font-roboto font-normal text-base text-[#6B7280] text-justify">
                The enhanced Medbot is a super smart system that can measure our heartbeat, how strong our blood is pushing, how warm or cold we are, and how much oxygen we have. It can tell us if we're healthy and doing well.
            </p>
        </div>
        <div class="grid flex flex-col space-y-5 py-4 px-9 rounded-xl shadow-xl">
            <div class="flex flex-row space-x-3 items-center">
                <img src="{{asset('images/homepage/feature_2.svg')}}" alt="" class="scale-75 md:scale-100">
                <p class="font-roboto font-bold text-[#1F2937] text-xl">Ease of Use</p>
            </div>
            <p class="font-roboto font-normal text-base text-[#6B7280] text-justify">
                The enhanced Medbot is made to be super easy for anyone to use! It gives you clear directions so you can use it without any problem, even if you don’t know a lot about technology.
            </p>
        </div>
        <div class="grid flex flex-col space-y-5 py-4 px-9 rounded-xl shadow-xl">
            <div class="flex flex-row space-x-3 items-center">
                <img src="{{asset('images/homepage/feature_3.svg')}}" alt="" class="scale-75 md:scale-100">
                <p class="font-roboto font-bold text-[#1F2937] text-xl">Comfortability</p>
            </div>
            <p class="font-roboto font-normal text-base text-[#6B7280] text-justify">
                The enhanced Medbot cares a lot about how you feel when it checks your important vital signs. It uses special ways to get the readings without any trouble. It is also designed to be really comfy, so its users can have comfortable experience
            </p>
        </div>
        <div class="grid flex flex-col space-y-5 py-4 px-9 rounded-xl shadow-xl z-50">
            <div class="flex flex-row space-x-3 items-center">
                <img src="{{asset('images/homepage/feature_4.svg')}}" alt="" class="scale-75 md:scale-100">
                <p class="font-roboto font-bold text-[#1F2937] text-xl">Monitoring</p>
            </div>
            <p class="font-roboto font-normal text-base text-[#6B7280] text-justify">
                The enhanced Medbot is like a special friend that can watch your body signs all the time and tell you if anything looks funny. Even doctors can check on your numbers from far away and help if something is not right.
            </p>
        </div>
        
    </div>
    
    <div class="flex    ">
        <img src="{{asset('images/homepage/Wave.svg')}}" alt="" class=" bottom-0 w-screen">
    </div>   
    
</body>
</html>`