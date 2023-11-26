<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="{{asset('/js/moment.js')}}"></script>
    <script src="{{asset('/js/chart-js/chart.umd.js')}}"></script>
    <script src="{{asset('/js/chart-js-annotation/chartjs-plugin-annotation.min.js')}}"></script>

    @vite('resources/css/app.css')
</head>
<body>
    @if(Session::has('id'))
        <script>
            const id = {{session()->get('id')}};
            open('/get/qrcode?id='+id);
        </scrip>
    @endif

    @php
        use Carbon\Carbon;
    @endphp

    <div class="flex flex-col w-screen pb-5">

        <div class="relative flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/LOGO.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#5ECECD] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
                    <img src="{{ $user->profile != null ? asset('storage/' . $user->profile) : asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 rounded-full hover:brightness-75">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
                <x-menu_user :user="$user"/>
            </div>

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-white text-lg md:text-2xl">Dashboard</p>
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3">Welcome {{ $user->first_name }},</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        Go ahead and take a look at the results of your vital signs measurement! Your health and progress are our top priority. 
                    </p>
                    
                    
                    <img src="{{asset('images/side view.png')}}" alt="" class="absolute self-end md:h-[60%] md:w-[25%] lg:h-[70%] lg:w-[23%] xl:h-[80%] xl:w-[20%] md:right-7 lg:right-12 xl:right-24 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>

        <div class="flex flex-col justify-center pt-10 px-10">
            <p class="font-roboto font-bold text-black text-lg lg:text-xl">LATEST READING</p>
        
            <div class="flex flex-row py-2 px-10">
                <p class="flex flex-row text-base lg:text-xl">Taken last {{count($readings) > 0 ? Carbon::parse($readings[0]->created_at)->format('M d, Y g:i a') : '(No readings yet)'}}</p>
            </div>
        </div>

        <div class="flex items-center justify-center my-2">
			<div class="flex flex-row items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit w-fit border border-gray-300">
				<img src="{{asset('images/dashboard/Blue.png')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-black mr-2 md:mr-5"> - Low</p>

				<img src="{{asset('images/dashboard/Green.png')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-black mr-2 md:mr-5"> - Normal</p>

				<img src="{{asset('images/dashboard/Red.png')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-black"> - High</p>
			</div>
		</div>

        <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
            
            @if(count($readings) > 1)
                @if($readings[0]->blood_pressure_rating == 'low')
                    <div id="blood-pressure-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2 bg-blue-400 cursor-pointer">
                @elseif($readings[0]->blood_pressure_rating == 'normal')
                    <div id="blood-pressure-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-green-400 shadow-lg shadow-green-500/50 mb-8 px-2 py-2 bg-green-400 cursor-pointer">
                @elseif($readings[0]->blood_pressure_rating == 'high')
                    <div id="blood-pressure-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-red-400 shadow-lg shadow-red-500/50 mb-8 px-2 py-2 bg-red-400 cursor-pointer">
                @endif
            @else
                <div id="blood-pressure-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
            @endif
            
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

                <div id="blood-pressure-causes" class="hidden absolute top-24 w-full h-auto bg-white border border-gray-400 rounded-lg z-10 p-2">
                    @if(count($readings) > 1)
                        @if($readings[0]->blood_pressure_rating == 'low')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Blood Pressure is Low</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">This might be due to the following: <br> 
                                •   Dehydration <br>
                                •	Medication side effects <br>
                                •	Heart issues <br>
                                •	Prolonged bed rest <br>
                                •	Agitation or other unusual changes in behavior <br> 
                                •	Confusion or trouble concentrating <br>
                                •	Feeling tired, sluggish or lethargic <br>
                                •	Fatigue or weakness <br>
                                •	Fast, shallow breathing <br>
                                •	Distorted or blurred vision <br>
                                •	Nausea or vomiting <br>
                                •	Fainting or passing out <br>
                                •	Dizziness or feeling lightheaded <br>
                            </p>

                        @elseif($readings[0]->blood_pressure_rating == 'normal')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Blood Pressure is Normal</p>
                            <p class="font-roboto text-xs text-center font-normal lg:text-base">This indicates a Healthy Condition</p>

                        @elseif($readings[0]->blood_pressure_rating == 'high')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Blood Pressure is High</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">High blood pressure, also known as hypertension, might be due to the following: <br>
                                •	Having biological family members with high blood pressure, cardiovascular disease or diabetes <br>
                                •	Being over age 55 <br>
                                •	Having certain medical conditions, including chronic kidney disease, metabolic syndrome, obstructive sleep apnea or thyroid disease <br>
                                •	Having overweight or obesity <br>
                                •	Not getting enough exercise <br>
                                •	Eating foods high in sodium <br>
                                •	Smoking or using tobacco products <br>
                                •	Drinking too much <br>             
                            </p>
                        @endif
                    @else
                        <div id="blood-pressure-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2"></div>
                    @endif
                </div>
            </div>

            @if(count($readings) > 1)
                @if($readings[0]->blood_saturation_rating == 'low')
                    <div id="blood-saturation-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2 bg-blue-400 cursor-pointer">
                @elseif($readings[0]->blood_saturation_rating == 'normal')
                    <div id="blood-saturation-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-green-400 shadow-lg shadow-green-500/50 mb-8 px-2 py-2 bg-green-400 cursor-pointer">
                @elseif($readings[0]->blood_saturation_rating == 'high')
                    <div id="blood-saturation-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-red-400 shadow-lg shadow-red-500/50 mb-8 px-2 py-2 bg-red-400 cursor-pointer">
                @endif
            @else
                <div id="blood-saturation-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
            @endif

                <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Oxygen Saturation</p>

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

                <div id="blood-saturation-causes" class="hidden absolute top-24 w-full h-auto bg-white border border-gray-400 rounded-lg z-10 p-2">
                    @if(count($readings) > 1)
                        @if($readings[0]->blood_saturation_rating == 'low')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Oxygen Saturation is Low</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">This might be due to the following: <br> 
                            •	Acute respiratory distress syndrome (ARDS) <br>
                            •	Anemia <br>
                            •	Asthma <br>
                            •	Bronchitis <br>
                            •	Chronic obstructive pulmonary disease (COPD) <br>
                            •	Congenital heart defects <br>
                            •	Congestive heart failure <br>
                            •	Emphysema <br>
                            •	Pneumonia <br>
                            •	Pneumothorax (air in the space around your lung or collapsed lung) <br>
                            •	Pulmonary edema (fluid on your lungs) <br>
                            •	Pulmonary embolism (blood clot in your lung) <br>
                            •	Pulmonary fibrosis (lung scarring) <br>
                            •	Pulmonary hypertension <br>
                            </p>
                        @elseif($readings[0]->blood_saturation_rating == 'normal')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Oxygen Saturation is Normal</p>
                            <p class="font-roboto text-xs text-center font-normal lg:text-base">This indicates an Adequate Oxygen levels<br> 
                        @endif
                    @else
                        <div id="blood-saturation-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2"></div>
                    @endif 
                </div>
            </div>

            @if(count($readings) > 1)
                @if($readings[0]->temperature_rating == 'low')
                    <div id="temperature-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2 bg-blue-400 cursor-pointer">
                @elseif($readings[0]->temperature_rating == 'normal')
                    <div id="temperature-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-green-400 shadow-lg shadow-green-500/50 mb-8 px-2 py-2 bg-green-400 cursor-pointer">
                @elseif($readings[0]->temperature_rating == 'high')
                    <div id="temperature-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-red-400 shadow-lg shadow-red-500/50 mb-8 px-2 py-2 bg-red-400 cursor-pointer">
                @endif
            @else
                <div id="temperature-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
            @endif

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

                <div id="temperature-causes" class="hidden absolute top-24 w-full h-auto bg-white border border-gray-400 rounded-lg z-10 p-2">
                    @if(count($readings) > 1)
                        @if($readings[0]->temperature_rating == 'low')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Temperature is Low</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">This might be due to the following: <br>
                            •	Cold Exposure Medical conditions, (hypothyroidism, shock)
                            </p>
                                
                        @elseif($readings[0]->temperature_rating == 'normal')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Temperature is Normal</p>
                            <p class="font-roboto text-xs text-center font-normal lg:text-base">This indicates a Normal Body Temperature</p>

                        @elseif($readings[0]->temperature_rating == 'high')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Temperature is High</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">You have a Fever. This might be due to the following: <br>
                                •	Bacterial infections <br>
                                •	Viral infections such as influenza or COVID-19 <br>
                                •	Gastrointestinal (GI) infections <br>
                                •	Urinary tract infections <br>
                                •	Skin infections <br>
                                •	Inflammation <br>
                                •	Heatstroke <br>
                            </p>
                        @endif
                    @else
                        <div id="temperature-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2"></div>
                    @endif
                </div>
            </div>


            @if(count($readings) > 1)
                @if($readings[0]->pulse_rate_rating == 'low')
                    <div id="pulse-rate-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2 bg-blue-400 cursor-pointer">
                @elseif($readings[0]->pulse_rate_rating == 'normal')
                    <div id="pulse-rate-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-green-400 shadow-lg shadow-green-500/50 mb-8 px-2 py-2 bg-green-400 cursor-pointer">
                @elseif($readings[0]->pulse_rate_rating == 'high')
                    <div id="pulse-rate-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-red-400 shadow-lg shadow-red-500/50 mb-8 px-2 py-2 bg-red-400 cursor-pointer">
                @endif
            @else
                <div id="pulse-rate-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
            @endif
            
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

                <div id="pulse-rate-causes" class="hidden absolute top-24 w-full h-auto bg-white border border-gray-400 rounded-lg z-10 p-2">
                    @if(count($readings) > 1)
                        @if($readings[0]->pulse_rate_rating == 'low')
                        <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Pulse Rate is Low</p>
                        <p class="font-roboto text-xs text-justify font-normal lg:text-base">This might be due to the following: <br>
                            •	Age 
                        </p>

                        @elseif($readings[0]->pulse_rate_rating == 'normal')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Pulse Rate is Normal</p>
                            <p class="font-roboto text-xs text-center font-normal lg:text-base">This indicates a Healthy Heart Rate</p>

                        @elseif($readings[0]->pulse_rate_rating == 'high')
                            <p class="font-roboto text-sm text-center uppercase font-bold lg:text-base">Your Pulse Rate is High</p>
                            <p class="font-roboto text-xs text-justify font-normal lg:text-base">This might be due to the following: <br>
                                •	Using tobacco products <br>
                                •	Having a family history of tachycardia <br>
                                •	Stressed <br>
                                •	Having high blood pressure <br>
                                •	Having obesity <br>
                                •	Drinking a lot of caffeine or alcohol <br>
                                •	Having a thyroid issue but not getting treatment for it <br>
                                •	Taking drugs that are not legal <br>
                                •	Having certain heart issues <br>
                                •	Taking certain kinds of heart medicines <br>

                            </p>
                        @endif
                    @else
                        <div id="pulse-rate-info" class="relative flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2"></div>
                    @endif
                </div>
            </div> 
        </div>

        <div class="flex items-center justify-start px-10 my-2">
			<div class="flex flex-row items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit w-fit border border-gray-300">
				<p class="text-roboto text-sm font-semibold">Disclaimer: The Enhanced Med-Bot provides general guidance. For specific diagnosis regarding health condition, consult a qualified medical professional.</p>
			</div>
		</div>

        <div class="flex flex-col justify-center py-10 px-10">
            <p class="font-roboto font-bold text-black text-lg lg:text-xl">PREVIOUS READING</p>
        
            <div class="flex flex-row py-2 px-10">
                <p class="flex flex-row text-base lg:text-xl">Taken last {{count($readings) > 1 ? Carbon::parse ($readings[1]->created_at)->format('M d, Y g:i a') : '(No readings yet)'}}</p>
            </div>
        </div>

        <div class="place-items-center items-center justify-center grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-10 px-10 lg:gap-3 md:grid-cols-2 md:gap-5 mt-8">
            <div class="flex flex-row items-center border-2 border-solid rounded-lg w-full h-full border-blue-400 shadow-lg shadow-cyan-500/50 mb-8 px-2 py-2">
                <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="" class="w-1/4 h-fit">
                <div class="flex flex-col text-center w-3/4">
                    <p class="font-bold text-xl lg:text-2xl">Blood Pressure</p>
                    
                    <div class="flex flex-row text-center justify-center gap-2">
                        <p class="text-lg lg:text-xl mt-2 "> {{count($readings) > 1 ? $readings[1]->blood_pressure_systolic : '--'}}/{{count($readings) > 1 ? $readings[1]->blood_pressure_diastolic : '--'}} mmHg</p>
                        
                        @if(count($readings) > 1)
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
                        <option value="weekly" >Week</option>
                        <option value="monthly" >Month</option>
                        <option value="yearly" >Year</option>
                    </select>
                
                    <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="trends_year" name="value">
                    <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="trends_month" name="value">
                    <input class="flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="trends_week" name="value">
                </div>

                <i class = "flex font-roboto text-base lg:text-lg  py-1 px-12 mt-4 lg:mt-8" id="reading_title">Blood Pressure</i>   
                <canvas id="reading-trends" class="mt-4 w-[96%] flex drop-shadow-lg shadow-lg rounded-lg bg-white z-10 h-fit">
                    <input  type="text" class="hidden" name="user-id" id="user-id" value="{{$user->id}}">
                </canvas>

                <div class="grid grid-cols-2 lg:grid-cols-4 pt-4 gap-y-1 gap-x-1 lg:gap-x-2">
                    <button id="reading_bp" name="reading_bp" class="flex flex-row font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#59AEDD] text-white">
                        <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="Blood Pressure" class="flex h-6 w-7 mr-4">BP
                    </button>
                    <button id="reading_bs" name="reading_bs" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-6 py-1 bg-[#EB7373] text-white">
                        <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="Blood Saturation" class="flex h-5 w-8 mr-6 mt-0.5">OS
                    </button>
                    <button id="reading_temp" name="reading_temp" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-5 py-1 bg-[#697269] text-white ">
                        <img src="{{asset('images/dashboard/temperature.svg')}}" alt="Temperature" class="flex h-5 w-8 mr-3  mt-0.5">TEMP
                    </button>
                    <button id="reading_pr" name="reading_pr" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#93D396] text-white">
                        <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="Pulse Rate" class="flex h-5 w-7 mr-6 mt-0.5">PR
                    </button>
                </div>

                
            </div> 
        </div>

        <div class="flex flex-col items-center justify-center py-5 w-full lg:px-32">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-full border border-gray-300 md:w-4/5 lg:w-full relative">
                <p class="font-roboto font-normal leading-normal text-[#151515] text-lg lg:text-2xl md:text-xl px-2 py-2 my-2 justify-center bg-blue-200 w-full text-center">Reading Rating</p>

                <div class="flex flex-row lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 py-2">
                    <select class="shadow border px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="rating_select" name="by">
                        <option value="weekly" >Week</option>
                        <option value="monthly" >Month</option>
                        <option value="yearly" >Year</option>
                    </select>  
                
                    <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="rating_year" name="value">
                    <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="rating_month" name="value">
                    <input class=" flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="rating_week" name="value">
                </div>

                <i class = "flex font-roboto text-base lg:text-lg  py-1 px-12 mt-4 lg:mt-8" id="title">Blood Pressure</i>               
                <canvas class="mt-4 flex drop-shadow-lg shadow-lg h-12 w-10 rounded-lg bg-white" id="user-ratings-chart"></canvas>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 pt-4 gap-y-1 gap-x-1 lg:gap-x-2">
                   <button id="rating_bp" name="rating_bp" class="flex flex-row font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#59AEDD] text-white">
                    <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="Blood Pressure" class="flex h-6 w-7 mr-4">BP
                   </button>
                   <button id="rating_bs" name="rating_bs" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-6 py-1 bg-[#EB7373] text-white">
                    <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="Blood Saturation" class="flex h-5 w-8 mr-6 mt-0.5">OS
                   </button>    
                   <button id="rating_temp" name="rating_temp"
                   class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-5 py-1 bg-[#697269] text-white ">
                    <img src="{{asset('images/dashboard/temperature.svg')}}" alt="Temperature" class="flex h-5 w-8 mr-3  mt-0.5">TEMP
                   </button>
                   <button id="rating_pr" name="rating_pr" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#93D396] text-white">
                    <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="Temperature" class="flex h-5 w-7 mr-6 mt-0.5">PR
                </button>
                
            </div>
        </div>
    </div>

    <script src="{{ asset('/js/dashboard_user.js') }}"></scrip>
    <script src="{{ asset('/js/vitals_info.js') }}"></script>

</body>
</html>