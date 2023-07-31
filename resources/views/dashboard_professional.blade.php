<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Professional Dashboard</title>
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
        
         
        <div class=" flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat relative pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/dashboard/logo.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
                    <img src="{{asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 hover:brightness-75">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
                <x-menu_professional :user="$user"/>

            </div>

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
                
                <form action="/search/process" role="search" method="GET" enctype="multipart/form-data" id='form' name='form' class="flex w-full md:w-2/5 lg:w-2/5">
                    <div class="flex flex-row items-center relative w-[100%] md:w-[100%]">
                        <input type="search" id="search" name="search" class="w-full bg-[#DDD9D9]/50 border-none rounded-2xl outline-none px-8 lg:px-10 lg:mr-3 py-1 md:py-2 lg:py-2 placeholder:text-[#B87070] " placeholder="Search for user">
                        <button class="absolute right-3 md:right-4 lg:right-8" id="search_button" name="search_button" type="button">
                            <img src="{{asset('images/dashboard/search.png')}}" alt="" >
                        </button>
                        
                    </div>     
                </form>

                
                
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Hello {{$user->honorific}} {{$user->last_name}},</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        We sincerely appreciate your effort in reviewing the vital sign measurements history of patients. Your attention to their progress will greatly contribute to their well-being. 
                    </p>
                    
                    
                    <img src="{{asset('images/dashboard/model.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <p class="flex font-bold font-roboto text-black/80 text-xl md:text-xl lg:text-2xl py-5 md:py-7 lg:py-4 justify-center md:justify-start md:px-10">Patient's Statistics</p>

        <div class="w-full flex flex-col lg:flex-row items-center space-y-5 lg:space-y-0 lg:justify-evenly space-x-2 lg:px-4">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-[60%]">
                <p class="font-roboto text-semibold text-black/80 text-base mb-2 md:text-xl">Recent Patients</p>
                <div class="table w-full">
                    <div class="table-header-group">
                        <div class="table-row bg-gray-200 font-roboto font-semibold text-black text-sm md:text-base">
                            <div class="table-cell text-center py-1">Name</div>
                            <div class="table-cell text-center py-1">Sex</div>
                            <div class="table-cell text-center py-1">Address</div>
                            <div class="table-cell text-center py-1">Time Taken</div>
                       </div>
                    </div>

                    @foreach($latest_readings as $reading)
                        <div class="table-row-group">
                            <div class="table-row font-roboto font-normal text-black text-sm md:text-base ">
                                <div class="table-cell text-center py-1">{{$reading->user->first_name}} {{$reading->user->last_name}}</div>
                                <div class="table-cell text-center py-1">{{$reading->user->sex}}</div>
                                <div class="table-cell text-center py-1">{{$reading->user->barangay}}, {{$reading->user->municipality}}</div>
                                <div class="table-cell text-center py-1">{{\Carbon\Carbon::parse($reading->created_at)->format('M d, Y (H:i:s)')}}</div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 w-full px-2 md:px-6">
                <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-full ">
                    <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515]  px-4 text-center bg-gray-200  ">Patients that Used Enhanced Med-Bot</p>
                    <div class="flex flex-col md:flex-row font-roboto self-center md:space-x-10 pt-2 ">
                                
                        <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                       
                            <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="select" name="by">
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="yearly" >Yearly</option> 
                            </select>  
                        </div> 
                            <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="year" name="value">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="month" name="value">
                            <input class=" flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="week" name="value">
                    </div>
                    <img src="{{asset('images/login/card_bg_2.svg')}}" alt="" class="absolute place-self-start lg:h-[50%]  bottom-0 right-0 ">
                    <canvas id="patientUses" class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></canvas>
                </div>

                <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-full">
                    <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515]  px-4 text-center bg-gray-200  ">Patients Registered to Enhanced Med-Bot</p>
                    <div class="flex flex-col md:flex-row font-roboto self-center md:space-x-10 pt-2 ">
                                
                        <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                           
                            <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="registered_select" name="registered_by">
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="yearly" >Yearly</option> 
                            </select>  
                        </div> 
                            <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="registered_year" name="registered_value">
                            <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="registered_month" name="registered_value">
                            <input class="flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="registered_week" name="registered_value">
                    </div>
                    <img src="{{asset('images/login/card_bg_1.svg')}}" alt="" class="absolute place-self-start lg:h-[50%]  bottom-0 left-0">         
                    <canvas id="patientRegisters" class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></canvas>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center md:justify-start md:flex-row space-x-6 px-5">
            <p class="flex text-lg md:text-xl lg:text-2xl font-roboto font-bold pt-8 pl-5 pb-4">Patient's Record Summary</p>
        </div>
        
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 w-full px-2 md:px-6">
            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-full ">
                <p class="flex font-roboto font-normal self-center leading-normal text-lg md:text-xl lg:text-2xl  text-[#151515] px-2 justify-center bg-blue-200 w-full">Patients Readings</p>
                <div class="flex flex-col md:flex-row font-roboto self-center md:space-x-10 pt-2 ">
                                
                    <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" name="municipality" id="reading_byMunicipality"> 
                            <option value="All">All</option>
                            <option value="Boac">Boac</option>
                            <option value="Buenavista">Buenavista</option>
                            <option value="Gasan">Gasan</option>
                            <option value="Mogpog">Mogpog</option>
                            <option value="Sta. Cruz">Santa Cruz</option>
                            <option value="Torrijos">Torrijos</option>
                        </select>
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="reading_select" name="reading_by">
                            <option value="weekly" >Weekly</option>
                            <option value="monthly" >Monthly</option>
                            <option value="yearly" >Yearly</option> 
                        </select>  
                    </div> 
                        <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="reading_year" name="reading_value">
                        <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="reading_month" name="reading_value">
                        <input class="flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="reading_week" name="reading_value">
                </div> 

                                
                <canvas class="mt-4 flex drop-shadow-lg shadow-lg h-72 w-full rounded-lg bg-white"></canvas>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 pt-4 gap-y-1 gap-x-1 lg:gap-x-2">
                   <button id="reading_bp" name="reading_bp" class="flex flex-row font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#59AEDD] text-white">
                    <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="Blood Pressure" class="flex h-6 w-7 mr-4">BP
                   </button>
                   <button id="reading_bs" name="reading_bs" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-6 py-1 bg-[#EB7373] text-white">
                    <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="Blood Saturation" class="flex h-5 w-8 mr-6 mt-0.5">BS
                   </button>
                   <button id="reading_temp" name="reading_temp"
                   class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-5 py-1 bg-[#697269] text-white">
                    <img src="{{asset('images/dashboard/temperature.svg')}}" alt="Temperature" class="flex h-5 w-8 mr-3  mt-0.5">TEMP
                   </button>
                   <button id="reading_pr" name="reading_pr" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#93D396] text-white">
                    <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="Temperature" class="flex h-5 w-7 mr-6 mt-0.5">PR
                </button>
            </div>
            </div>

            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-full">
                <p class="flex font-roboto font-normal self-center leading-normal text-lg md:text-xl lg:text-2xl  text-[#151515]  px-2 justify-center bg-blue-200 w-full">Pervasiveness</p>
                <div class="flex flex-col md:flex-row font-roboto self-center md:space-x-10 pt-2 ">
                                
                    <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" name="muni" id="muni">
                            <option value="All">All</option>
                            <option value="Boac">Boac</option>
                            <option value="Buenavista">Buenavista</option>
                            <option value="Gasan">Gasan</option>
                            <option value="Mogpog">Mogpog</option>
                            <option value="Sta. Cruz">Santa Cruz</option>
                            <option value="Torrijos">Torrijos</option></select>

                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="pervasiveness_select" name="pervasiveness_select">
                            <option value="weekly" >Weekly</option>
                            <option value="monthly" >Monthly</option>
                            <option value="yearly" >Yearly</option> 
                        </select>  
                    </div> 
                        <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="pervasiveness_year" name="pervasiveness_year">
                        <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="pervasiveness_month" name="pervasiveness_month">
                        <input class="flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="pervasiveness_week" name="pervasiveness_week">
                    </div>
                
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-72 w-full rounded-lg bg-white"></div>
                <div class="grid grid-cols-2 lg:grid-cols-4 pt-4 gap-y-1 gap-x-1 lg:gap-x-2">
                    <button id="pervasiveness_bp" name="pervasiveness_bp" class="flex flex-row font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#59AEDD] text-white">
                     <img src="{{asset('images/dashboard/blood_pressure.svg')}}" alt="Blood Pressure" class="flex h-6 w-7 mr-4">BP
                    </button>
                    <button id="pervasiveness_bs" name="pervasiveness_bs" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-6 py-1 bg-[#EB7373] text-white">
                     <img src="{{asset('images/dashboard/blood_saturation.svg')}}" alt="Blood Saturation" class="flex h-5 w-8 mr-6 mt-0.5">BS
                    </button>
                    <button id="pervasiveness_temp" name="pervasiveness_temp"
                    class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-5 py-1 bg-[#697269] text-white">
                     <img src="{{asset('images/dashboard/temperature.svg')}}" alt="Temperature" class="flex h-5 w-8 mr-3  mt-0.5">TEMP
                    </button>
                    <button id="pervasiveness_pr" name="pervasiveness_pr" class="flex font-roboto font-light text-sm md:text-base rounded-xl border focus:outline-none focus:shadow-outline px-8 py-1 bg-[#93D396] text-white">
                     <img src="{{asset('images/dashboard/pulse_rate.svg')}}" alt="Temperature" class="flex h-5 w-7 mr-6 mt-0.5">PR
                 </button>
             </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row  items-center py-2 pt-12 px-5">
            <p class="flex font-bold text-lg md:text-xl lg:text-2xl self-center md:self-start  pb-2 pl-6 font-roboto">Patient's Demographic Profile</p>
            
        </div>           
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 w-full px-2 md:px-6">
            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-3/5 space-y-2  ">
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-2xl  text-[#151515]  px-4 bg-violet-100 w-full justify-center">Patient's Count by Age</p>         
                    <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" name="muni" id="muni"> 
                            <option value="All">All</option>
                            <option value="Boac">Boac</option>
                            <option value="Buenavista">Buenavista</option>
                            <option value="Gasan">Gasan</option>
                            <option value="Mogpog">Mogpog</option>
                            <option value="Sta. Cruz">Santa Cruz</option>
                            <option value="Torrijos">Torrijos</option></select>
                        </div>
                <img src="{{asset('images/login/card_bg_1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 ">
                <img src="{{asset('images/login/card_bg_2.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 right-0">         
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-80 w-full rounded-lg bg-white "></div>
            </div>

            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-3/5 space-y-2 ">
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-2xl  text-[#151515]  px-4 bg-violet-100 w-full justify-center">Patient's Count by Sex</p>
                    <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" name="muni" id="muni"> 
                            <option value="All">All</option>
                            <option value="Boac">Boac</option>
                            <option value="Buenavista">Buenavista</option>
                            <option value="Gasan">Gasan</option>
                            <option value="Mogpog">Mogpog</option>
                            <option value="Sta. Cruz">Santa Cruz</option>
                            <option value="Torrijos">Torrijos</option></select>

                </div>
                <img src="{{asset('images/login/card_bg_1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 ">
                <img src="{{asset('images/login/card_bg_2.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 right-0">         
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-80 w-full rounded-lg bg-white"></div>
            </div>

            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-3/5 space-y-2 ">
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-2xl  text-[#151515] px-4 bg-violet-100 w-full justify-center">Patient's Count by Location</p>
                <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2 ">
                    <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" name="muni" id="muni"> 
                        <option value="All">All</option>
                        <option value="Boac">Boac</option>
                        <option value="Buenavista">Buenavista</option>
                        <option value="Gasan">Gasan</option>
                        <option value="Mogpog">Mogpog</option>
                        <option value="Sta. Cruz">Santa Cruz</option>
                        <option value="Torrijos">Torrijos</option></select>
                </div>
                <img src="{{asset('images/login/card_bg_1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 ">
                <img src="{{asset('images/login/card_bg_2.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 right-0">
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-80 w-full rounded-lg bg-white"></div>
                
          
            </div>         
        </div>
        
        </div>
        
    </div>

        
    <script src="{{asset('/js/chart.js')}}"></script>
    <script src="{{asset('/js/dashboard_professional.js')}}"></script>
    <script src="{{asset('/js/professional_graphs.js')}}"></script>

</body>
</html>