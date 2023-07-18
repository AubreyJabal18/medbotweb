<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex flex-col w-screen pb-10">
        <img src="{{asset('images/dashboard/Dashboard.svg')}}" alt="" class="absolute w-full">

        <div class="flex flex-col relative pb-36 md:pb-8">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src="{{asset('images/homepage/logo2.svg')}}" alt="" class="h-12 w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">Rylene Grace Sacro</p>
                    <img src="{{asset('images/register/Profile pic.svg')}}" alt="" class="h-12 w-12">
                </div>
            </div>

            <div class="flex flex-col items-start bg-[#F3EFEF]/50 py-5 px-4 md:flex-row md:px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-col justify-center py-10 px-10">
                <p class="font-roboto font-medium text-black md:text-white text-2xl md:ml-3 md:text-2xl text-center md:text-left">Welcome back Aubrey,</p>
                <div class="flex flex-row lg:space-x-60 py-4 px-7">
                    <p class="font-roboto font-normal text-justify text-xl text-black md:text-white md:ml-3 md:text-xl">
                        Go ahead and take a look at the results of your vital signs measurement! Your health and progress are our top priority.
                    </p>
                </div>
            </div> 
            
            <div class="flex flex-col justify-center py-10 px-10">
                <p class="font-roboto font-bold text-black text-xl">LATEST READING</p>
            
                <div class="flex flex-row py-2 px-10">
                    <p class="flex flex-row  text-xl">Taken last 6/21/2023 3:30 pm</p>
                </div>
            </div>

            <div class="items-center justify-center grid grid-cols-1 lg:grid-cols-4 gap-10 px-10 lg:gap-10 md:grid-cols-2 md:gap-5">
                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 md:w-[300px] md:h-[150px]">
                    <img src="{{asset('images/dashboard/Blood pressure.svg')}}" alt="" class="w-[120px] h-fit">
                    <div class="flex flex-col text-center">
                        <p class="font-bold text-2xl">Blood Pressure</p>
                        <p class="text-xl mt-2">120/80 bpm</p>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 md:w-[300px] md:h-[150px]">
                    <img src="{{asset('images/dashboard/Blood saturation.svg')}}" alt="" class="w-[120px] h-fit">
                    <div class="flex flex-col text-center ">
                        <p class="font-bold text-2xl">Blood Saturation</p>
                        <p class="text-xl mt-2">95%</p>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 md:w-[300px] md:h-[150px]">
                    <img src="{{asset('images/dashboard/Temperature.svg')}}" alt="" class="w-[120px] h-fit">
                    <div class="flex flex-col text-center items-center">
                        <p class="font-bold text-2xl">Temperature</p>
                        <p class="text-xl mt-2">37 °C</p>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 md:w-[300px] md:h-[150px]">
                    <img src="{{asset('images/dashboard/Pulse rate.svg')}}" alt="" class="w-[120px] h-fit">
                    <div class="flex flex-col text-center">
                        <p class="font-bold text-2xl">Pulse Rate</p>
                        <p class="text-xl mt-2">75 bpm</p>
                    </div>
                </div> 
            </div>

            <div class="flex flex-col justify-center pt-14 pb-10 px-10">
                <p class="font-roboto font-bold text-black text-xl">BROWSE RESULT</p>
            
                <div class="flex flex-col gap-3 lg:flex-row py-5 px-10 items-center relative">
                    <div class="relative">
                        <select class="shadow-lg appearance-none border-blue-400 border-2 shadow-cyan-500/50 rounded w-full h-fit py-5 px-7 text-lg text-black leading-tight focus:outline-none focus:shadow-outline" id="Date" name="Date">
                                <option disabled selected hidden class="text-black text-xl" value="null">Select an option</option>
                                <option class="text-center" value="Day">Day</option>
                                <option class="text-center" value="Week">Week</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <img src="{{asset('images/dashboard/Dropdown.svg')}}" alt="Dropdown Icon" class="h-fit w-fit text-black">
                            </div>
                        </div>
                    <p class="flex flex-row text-xl px-5" id="DateTime">Taken last 6/21/2023 3:30 pm</p>

                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-evenly gap-7">

                <div class="grid grid-cols-2 items-center justify-center lg:grid-cols-1 lg:justify-evenly gap-5 py-5 px-5">
                    <button class="flex flex-row items-center justify-center border-2 border-solid rounded-lg w-[180px] h-[70px] bg-blue-500 border-blue-400 shadow-lg shadow-cyan-500/50">
                        <p class="font-roboto font-semibold text-white ">SPECIFIC</p>
                    </button>

                    <button class="flex flex-row items-center justify-center border-2 border-solid rounded-lg w-[180px] h-[70px] bg-blue-500 border-blue-400 shadow-lg shadow-cyan-500/50">
                        <p class="font-roboto font-semibold text-white ">BAR</p>
                    </button>

                    <button class="flex flex-row items-center justify-center border-2 border-solid rounded-lg w-[180px] h-[70px] bg-blue-500 border-blue-400 shadow-lg shadow-cyan-500/50">
                        <p class="font-roboto font-semibold text-white ">LINE</p>
                        <img src="{{asset('images/dashboard/Line.svg')}}" alt="">
                    </button>

                    <button class="flex flex-row items-center justify-center border-2 border-solid rounded-lg w-[180px] h-[70px] bg-blue-500 border-blue-400 shadow-lg shadow-cyan-500/50">
                        <p class="font-roboto font-semibold text-white ">PIE</p>
                        <img src="{{asset('images/dashboard/Pie.svg')}}" alt="">
                    </button>
                </div>

                <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-96 border border-gray-300 md:w-4/5 lg:w-[45%]">

                </div>
                
            </div>
             
        </div>
        
        
    </div>


</body>
</html>