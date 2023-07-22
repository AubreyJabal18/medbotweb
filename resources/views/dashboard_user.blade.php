<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if(Session::has('id'))
        <script>
            const id = {{session()->get('id')}};
            window.open('/get/qrcode?id='+id, '_self');
        </script>
    @endif

    <div class="flex flex-col w-screen pb-10">

        <div class=" flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat relative pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/dashboard/logo.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">Rylene Grace Sacro</p>
                    <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="h-8 w-8 md:h-12 md:w-12">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
            </div>

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3">Hello Dr. Rylene Grace,</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        We sincerely appreciate your effort in reviewing the vital sign measurements history of patients. Your attention to their progress will greatly contribute to their well-being. 
                    </p>
                    
                    
                    <img src="{{asset('images/login/modelleftsideview.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
            
            <div class="flex flex-col justify-center pt-10 px-10">
                <p class="font-roboto font-bold text-black text-lg lg:text-xl">LATEST READING</p>
            
                <div class="flex flex-row py-2 px-10">
                    <p class="flex flex-row text-base lg:text-xl">Taken last 6/21/2023 3:30 pm</p>
                </div>
            </div>

            <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Blood pressure.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Blood Pressure</p>
                        
                        <div class="flex flex-row text-center justify-center gap-2">
                           <p class="text-lg lg:text-xl mt-2 "> 120/80 bpm</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                        
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Blood saturation.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Blood Saturation</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">95%</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Temperature.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Temperature</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">37 °C</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2">
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Pulse rate.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Pulse Rate</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">75 bpm</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                    </div>
                </div> 
            </div>

            <div class="flex flex-col justify-center py-10 px-10">
                <p class="font-roboto font-bold text-black text-lg lg:text-xl">PREVIOUS READING</p>
            
                <div class="flex flex-row py-2 px-10">
                    <p class="flex flex-row text-base lg:text-xl">Taken last 6/21/2023 3:30 pm</p>
                </div>
            </div>

            <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Blood pressure.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Blood Pressure</p>
                        
                        <div class="flex flex-row text-center justify-center gap-2">
                           <p class="text-lg lg:text-xl mt-2 "> 120/80 bpm</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                        
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Blood saturation.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Blood Saturation</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">95%</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Temperature.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Temperature</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">37 °C</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2">
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                    <img src="{{asset('images/dashboard/Pulse rate.svg')}}" alt="" class="w-1/4 h-fit">
                    <div class="flex flex-col text-center w-3/4">
                        <p class="font-bold text-xl lg:text-2xl">Pulse Rate</p>

                        <div class="flex flex-row text-center justify-center gap-2">
                            <p class="text-lg lg:text-xl mt-2">75 bpm</p>
                            <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" class="w-8 h-8 mt-2"> 
                        </div>
                    </div>
                </div> 
            </div>

            <div class="flex flex-row px-10 pt-14">
                <p class="font-roboto font-bold text-black text-lg lg:text-xl">BROWSE RESULT</p>
            </div>
            
            <div class="flex flex-col lg:flex-row justify-center pt-10 pb-10 px-10 gap-10">
                <div class="flex flex-row justify-center py-5 w-full">
                    <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-full border border-gray-300 md:w-4/5 lg:w-full relative">
                        <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Reading Trends</p>

                        <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                            <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="trends_select" name="trends_select">
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="yearly" >Yearly</option>
                            </select>
                       
                            <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="trends_year" name="trends_year">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="trends_month" name="trends_month">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="trends_week" name="trends_week">
                        </div>

                        <div class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg h-96 rounded-lg bg-white z-10">

                        </div>

                        <img src="{{asset('images/dashboard/dashboard_bg1.svg')}}" alt="" class="absolute lg:h-[70%] bottom-0 left-0">
                        <img src="{{asset('images/dashboard/dashboard_bg2.svg')}}" alt="" class="absolute lg:h-60 bottom-0 right-0">  
                    </div> 
                </div>

                <div class="flex flex-row items-center justify-center py-5 w-full">
                    <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-full border border-gray-300 md:w-4/5 lg:w-full relative">
                        <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Reading Rating</p>

                        <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                            <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="rating_select" name="rating_select">
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="yearly" >Yearly</option>
                            </select>  
                        
                            <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="rating_year" name="rating_year">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="rating_month" name="rating_month">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="rating_week" name="rating_week">
                        </div>

                        <div class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg h-96 rounded-lg bg-white z-10">

                        </div>

                        <img src="{{asset('images/dashboard/dashboard_bg1.svg')}}" alt="" class="absolute lg:h-[70%] bottom-0 left-0">
                        <img src="{{asset('images/dashboard/dashboard_bg2.svg')}}" alt="" class="absolute lg:h-60 bottom-0 right-0">
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center justify-center pb-10 px-10">
                <div class="flex flex-row items-center justify-center py-5 w-full">
                    <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-full border border-gray-300 md:w-4/5 lg:w-full relative">
                        <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Med-Bot Used</p>

                        <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                            <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="medbot_select" name="medbot_select">
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="yearly" >Yearly</option>
                            </select>  
                        
                            <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="medbot_year" name="medbot_year">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="medbot_month" name="medbot_month">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="medbot_week" name="medbot_week">
                        </div>

                        <div class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg h-96 rounded-lg bg-white z-10">

                        </div>

                        <img src="{{asset('images/dashboard/dashboard_bg1.svg')}}" alt="" class="absolute lg:h-[70%] bottom-0 left-0">
                        <img src="{{asset('images/dashboard/dashboard_bg2.svg')}}" alt="" class="absolute lg:h-60 bottom-0 right-0">
                    </div>
                </div>
            </div>
    </div>

    <script src="{{ asset('/js/dashboard_user.js') }}"></script>
</body>
</html>