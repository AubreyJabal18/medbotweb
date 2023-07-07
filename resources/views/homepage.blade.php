<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <!-- <div class="w-full flex flex-col relative bg-[url('../images/homepage-top-banner.png')] bg-contain bg-origin-border bg-no-repeat h-[900px] md:h-[1000px] overflow-hidden"> -->
    <div class="w-full flex flex-col relative overflow-hidden bg-homepage-accent bg-cover bg-origin-border bg-no-repeat h-[900px] md:bg-none md:h-fit">

        <img src="{{asset('images/homepage/homepage-top-banner.svg')}}" alt="" class="absolute hidden -z-50 md:-translate-y-32 md:block">

        <!-- Navbar -->
        <div class="flex flex-row justify-center items-center space-x-10 px-8 py-5 md:justify-end">
            <a href="#" class="border border-white rounded-lg bg-[#5198F8] font-roboto font-medium text-base text-white px-5 py-2 md:text-sm">REGISTER</a>
            <a href="#" class="border border-white rounded-lg bg-[#5EDAD5] font-roboto font-medium text-base text-white px-5 py-2 md:text-sm">LOGIN</a>
        </div>

        <!-- Hero -->
        <div class="h-fit flex flex-col space-y-2 mx-auto items-center mt-5 md:flex-row md:space-y-0 md:space-x-20">
            <img src="{{asset('images/homepage/logo2.svg')}}" alt="" class="h-[232px] w-[258px]">
            <div class="flex flex-col space-y-5">
                <p class="font-roboto font-bold text-3xl text-[#5ECECD] text-shadow text-center md:text-[64px]">ENHANCED MED-BOT</p>
                <p class="font-roboto font-normal text-xl text-white text-center md:text-4xl">“Your Ultimate ALL-in-ONE Healthcare Buddy”</p>
            </div>
        </div>
        <div class="flex flex-row space-y-4 px-4 mt-6">
            <div class="flex flex-col space-y-5 items-center md:space-y-10">
                <p class="font-roboto font-normal text-center text-base text-white md:text-3xl">"We are here to assist you by offering solutions for your vital sign requirements, transforming the way you monitor your vital sign measurements."</p>
                <button href="#" class="relative border border-white rounded-lg bg-[#5EDAD5] font-roboto font-semibold tracking-wide text-sm text-white px-4 py-3 md:text-base md:px-12 md:py-5">GET STARTED</button>
            </div>
            <img src="{{asset('images/homepage/medbot.svg')}}" alt="" class="h-3/4 w-3/4 md:-translate-y-24">
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
        <div class="grid flex flex-col space-y-5 py-4 px-9 rounded-xl shadow-xl">
            <div class="flex flex-row space-x-3 items-center">
                <img src="{{asset('images/homepage/feature_4.svg')}}" alt="" class="scale-75 md:scale-100">
                <p class="font-roboto font-bold text-[#1F2937] text-xl">Monitoring</p>
            </div>
            <p class="font-roboto font-normal text-base text-[#6B7280] text-justify">
                The enhanced Medbot is like a special friend that can watch your body signs all the time and tell you if anything looks funny. Even doctors can check on your numbers from far away and help if something’s not right.
            </p>
        </div>
    </div>

    <!-- Wave -->
    <div>
        <img src="{{asset('images/homepage/Wave.svg')}}" alt="" class=" mt-4">
    </div>
</body>
</html>`