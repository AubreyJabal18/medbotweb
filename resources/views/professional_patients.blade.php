<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <script src="{{asset('/js/moment.js')}}"></script>
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

        <div class="relative flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/dashboard/logo.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $professional->first_name }} {{ $professional->last_name }} {{ $professional->suffix ? $professional->suffix : '' }}</p>
                    <img src="{{asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 hover:brightness-75">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
                <x-menu_professional :user="$user"/>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-20">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
                <a href="" class="font-roboto font-semibold text-[#A03B3B] hover:text-gray-300 text-base md:text-xl lg:pr-[5%]">View Readings</a>
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3">Hello there {{ $professional->honorific }} {{ $professional->last_name}},</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        Welcome to {{ $user->first_name}} {{ $user->last_name}} {{ $user->suffix ? $user->suffix : '' }} medical dashboard. Kindly review the comprehensive records to ensure optimal care and treatment planning.
                    </p>
                    
                    
                    <img src="{{asset('images/dashboard/model.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <div class="flex flex-col justify-center pt-10 px-10">
            <p class="font-roboto font-bold text-black text-lg lg:text-xl">LATEST READING</p>
        
            <div class="flex flex-row py-2 px-10">
                <p class="flex flex-row text-base lg:text-xl">Taken last {{count($readings) > 0 ? $readings[0]->created_at : '(No readings yet)'}}</p>
            </div>
        </div>

        <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Blood Pressure</p>
                    
                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2 "> {{count($readings) > 0 ? $readings[0]->blood_pressure_systolic : '--'}}/{{count($readings) > 0 ? $readings[0]->blood_pressure_diastolic : '--'}} mmHg</p>
                        
                        @if(count($readings) > 0)
                            @if($readings[0]->blood_pressure_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Blood Pressure" title="Low Blood Pressure" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_pressure_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" title="Normal Blood Pressure" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_pressure_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Blood Pressure" title="High Blood Pressure" class="w-8 h-8 mt-2">
                            @endif
                        @endif

                    </div>
                    
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Blood Saturation</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 0 ? $readings[0]->blood_saturation : '--'}}%</p>

                        @if(count($readings) > 0)
                            @if($readings[0]->blood_saturation_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Saturation" title="Low Saturation" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_saturation_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Saturation" title="Normal Saturation" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_saturation_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Saturation" title="High Saturation" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/temperature.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Temperature</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 0 ? $readings[0]->temperature : '--'}}°C</p>
                        
                        @if(count($readings) > 0)
                            @if($readings[0]->temperature_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Temperature " title="Low Temperature" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->temperature_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Temperature" title="Normal Temperature" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->temperature_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Temperature" title="High Temperature" class="w-8 h-8 mt-2">
                            @endif
                        @endif

                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Pulse Rate</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 0 ? $readings[0]->pulse_rate : '--'}} bpm</p>
                        
                        @if(count($readings) > 0)
                            @if($readings[0]->pulse_rate_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Pulse Rate " title="Low Pulse Rate" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->pulse_rate_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Pulse Rate" title="Normal Pulse Rate" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->pulse_rate_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Pulse Rate" title="High Pulse Rate" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                </div>
            </div> 
        </div>

        <div class="flex flex-col justify-center py-10 px-10">
            <p class="font-roboto font-bold text-black text-lg lg:text-xl">PREVIOUS READING</p>
        
            <div class="flex flex-row py-2 px-10">
                <p class="flex flex-row text-base lg:text-xl">Taken last {{count($readings) > 1 ? $readings[1]->created_at : '(No readings yet)'}}</p>
            </div>
        </div>

        <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Blood Pressure</p>
                    
                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2 "> {{count($readings) > 1 ? $readings[1]->blood_pressure_systolic : '--'}}/{{count($readings) > 1 ? $readings[1]->blood_pressure_diastolic : '--'}} mmHg</p>
                        
                        @if(count($readings) >= 1)
                            @if($readings[0]->blood_pressure_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Blood Pressure" title="Low Blood Pressure" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_pressure_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Blood Pressure" title="Normal Blood Pressure" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_pressure_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Blood Pressure" title="High Blood Pressure" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                    
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Blood Saturation</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 1 ? $readings[1]->blood_saturation : '--'}}%</p>
                        
                        @if(count($readings) > 1)
                            @if($readings[0]->blood_saturation_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Saturation" title="Low Saturation" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_saturation_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Saturation" title="Normal Saturation" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->blood_saturation_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Saturation" title="High Saturation" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/temperature.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Temperature</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 1 ? $readings[1]->temperature : '--'}}°C</p>
                        
                        @if(count($readings) > 1)
                            @if($readings[0]->temperature_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Temperature " title="Low Temperature" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->temperature_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Temperature" title="Normal Temperature" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->temperature_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Temperature" title="High Temperature" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Pulse Rate</p>

                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2">{{count($readings) > 1 ? $readings[1]->pulse_rate : '--'}} bpm</p>
                        
                        @if(count($readings) > 1)
                            @if($readings[0]->pulse_rate_rating == 'low')
                                <img src="{{asset('images/dashboard/low.svg')}}" alt="Low Pulse Rate " title="Low Pulse Rate" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->pulse_rate_rating == 'normal')
                                <img src="{{asset('images/dashboard/normal.svg')}}" alt="Normal Pulse Rate" title="Normal Pulse Rate" class="w-8 h-8 mt-2">
                            @elseif($readings[0]->pulse_rate_rating == 'high')
                                <img src="{{asset('images/dashboard/high.svg')}}" alt="High Pulse Rate" title="High Pulse Rate" class="w-8 h-8 mt-2">
                            @endif
                        @endif
                    </div>
                </div>
            </div> 
        </div>

        <div class="flex flex-row px-10 pt-14">
            <p class="font-roboto font-bold text-black text-lg lg:text-xl">BROWSE RESULT</p>
        </div>
        
        <div class="flex flex-col justify-center py-5 lg:px-32 w-full items-center">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-full relative">
                <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Reading Trends</p>

                <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                    <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="trends_select" name="by">
                        <option value="weekly" >Weekly</option>
                        <option value="monthly" >Monthly</option>
                        <option value="yearly" >Yearly</option>
                    </select>
                
                    <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="trends_year" name="value">
                    <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="trends_month" name="value">
                    <input class="flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="trends_week" name="value">
                </div>

                <canvas id="reading-trends" class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg rounded-lg bg-white z-10 h-fit">

                </canvas>

                <img src="{{asset('images/dashboard/card_bg_1.svg')}}" alt="" class="absolute lg:h-[70%] bottom-0 left-0">
                <img src="{{asset('images/dashboard/card_bg_2.svg')}}" alt="" class="absolute lg:h-60 bottom-0 right-0">  
            </div> 
        </div>

        <div class="flex flex-col items-center justify-center py-5 w-full lg:px-32">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-full border border-gray-300 md:w-4/5 lg:w-full relative">
                <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Reading Rating</p>

                <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                    <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="rating_select" name="by">
                        <option value="weekly" >Weekly</option>
                        <option value="monthly" >Monthly</option>
                        <option value="yearly" >Yearly</option>
                    </select>  
                
                    <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="rating_year" name="value">
                    <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="rating_month" name="value">
                    <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="rating_week" name="value">
                </div>

                <div class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg h-96 rounded-lg bg-white z-10">

                </div>

                <img src="{{asset('images/dashboard/card_bg_1.svg')}}" alt="" class="absolute lg:h-[70%] bottom-0 left-0">
                <img src="{{asset('images/dashboard/card_bg_2.svg')}}" alt="" class="absolute lg:h-60 bottom-0 right-0">
            </div>
        </div>

        <div class="flex absolute ">

        </div>
    </div>

    <script src="{{asset('/js/chart.js')}}"></script>
    <script src="{{ asset('/js/professional_patients.js') }}"></script>
</body>
</html>