<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="{{asset('/js/moment.js')}}"></script>
    @vite('resources/css/app.css')

</head>
<body>
    
    <div class="flex flex-col w-screen pb-4">
        
         
        <div class=" flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat relative pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/dashboard/logo.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }}</p>
                    <img src="{{asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 md:h-12 md:w-12">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
                <div id="menu" class=" hidden flex flex-col absolute z-50 w-3/4 md:w-1/5 h-full bg-white rounded-md drop-shadow-md top-16 right-2 px-8 py-4">
                    <div class="flex flex-col items-center">
                        <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="w-16 h-16 m-2">
                        <p class="font-roboto font-bold">{{ $user->first_name }}</p>
                        <p class="font-roboto">Patient</p> 
                    </div>
                    
                    <div class="flex flex-row mt-5 space-x-5">
                        <img src="{{asset('images/dashboard/dashboard2.svg')}}" alt="" class="w-6">
                        <p class="font-roboto">Logout</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
              
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Welcome, Administrator!</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        Feel free to explore the comprehensive statistical data captured by our Enhanced Med-Bot for valuable information and insights.
                    </p>
                    
                    
                    <img src="{{asset('images/login/modelleftsideview.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <p class="flex font-bold font-roboto text-black/80 text-xl md:text-xl lg:text-2xl pt-5 md:pt-8 lg:pt-4 pb-1  justify-center lg:justify-start md:px-10">User's Statistics</p>
        
        <div class="flex flex-col md:flex-row items-center self-center space-y-4 md:space-y-0 md:space-x-6 h-fit w-full px-2 md:px-4 lg:px-16 pb-6">
            <div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[60%] md:h-[70%] lg:h-[80%] w-[90%] md:w-[90%] lg:w-[30%] space-y-2  ">
                <img src="{{asset('images/dashboard/design_patient.png')}}" alt="" title="Healthcare Professional" class="absolute left-2 top-8 md:top-12 lg:h-[40%] w-[35%] lg:w-[40%] ">
                <div class="flex flex-col self-end px-2 h-28 md:h-32 lg:h-36 items-center">
                    <p class="flex font-roboto font-normal text-neutral-400 text-sm md:text-base">Patient Total Count</p>
                    <p class="flex font-roboto font-bold text-neutral-700  text-2xl lg:text-4xl mt-6 md:mt-4 md:ml-10 lg:ml-0">{{$patient_count}}</p>
               </div>
               <img src="{{asset('images/dashboard/design_1.png')}}" alt="" class="absolute right-0 bottom-0 h-[50%] w-[100%]">          
            </div>
            <div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[60%] md:h-[70%] lg:h-[70%] w-[90%] md:w-[90%] lg:w-[30%] space-y-2  ">
                <img src="{{asset('images/dashboard/design_prof.png')}}" alt="" title="Healthcare Professional" class="absolute left-0 top-6 md:top-12 h-[50%] md:h-[35%] lg:h-[40%] lg:w-[40%] ">
                <div class="flex flex-col self-end h-28 md:h-32 lg:h-36 items-center">
                    <p class="flex font-roboto font-normal text-neutral-400 text-sm md:text-sm lg:text-base">Professional Total Count</p>
                    <p class="flex font-roboto font-bold text-neutral-700  text-2xl lg:text-4xl mt-6 md:mt-4 md:ml-12 lg:ml-0">{{$professional_count}}</p>
               </div>
               <img src="{{asset('images/dashboard/design_2.png')}}" alt="" class="absolute right-0 bottom-0 h-[50%] w-[100%]">          
            </div>
            <div class=" flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 w-[90%] md:w-[90%] lg:w-[70%]">
                <div class="flex flex-col md:flex-row items-center md:self-start space-y-0.5 md:space-y-0 md:space-x-8 px-4 mb-3 w-full bg-blue-200">
                    <p class="font-roboto text-semibold text-black/80 text-base md:text-xl ">Latest Users</p>
                </div>
                <div class="table w-full">
                    <div class="table-header-group ">
                        <div class="table-row font-roboto font-semibold text-black text-xs md:text-sm lg:text-base ">
                            <div class="table-cell text-center py-1">User</div>
                            <div class="table-cell text-center py-1">Type</div>
                            <div class="table-cell text-center py-1 lg:w-[20%]">Sex</div>
                            <div class="table-cell text-center py-1 lg:w-[20%]">Address</div>
                        </div>
                    </div>
                    @foreach($latest_users as $user)    
                        <div class="table-row-group pb-2 ">
                            <div class="table-row font-roboto font-normal text-black text-sm md:text-base space-x-2 items-center ">
                                <div class="table-cell py-1 items-center justify- text-center w-1/5 lg:w-[20%] border-2 border-r-0 border-blue-500 ">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix }}
                                </div>
                                <div class="table-cell py-1 px-2 items-center justify- text-center w-1/5 lg:w-[20%] border-2 border-r-0 border-l-0 border-blue-500 ">{{ $user->type }}
                                </div>
                                <div class="table-cell text-center py-1 border-2 border-l-0 border-r-0 border-blue-500">{{ $user->sex }}</div>
                                <div class="table-cell text-center py-1 px-1 border-2 border-l-0 border-blue-500 ">{{ $user->barangay}}, {{ $user->municipality}}</div>
                            </div>
                            <div class="flex h-2"></div>
                            <div class="table-row font-roboto font-normal text-black text-sm md:text-base space-y-2 items-center"></div>   
                        </div>
                    @endforeach 
                    @for ($i = count($latest_users); $i <= 4; $i++)
                        <div class="table-row-group pb-2 ">
                            <div class="table-row font-roboto font-normal text-black text-sm md:text-base space-x-2 items-center ">
                                <div class="table-cell py-1 items-center justify- text-center w-1/5 lg:w-[20%] border-2 border-r-0 border-blue-500 ">---</div>
                                <div class="table-cell py-1 px-2 items-center justify- text-center w-1/5 lg:w-[20%] border-2 border-r-0 border-l-0 border-blue-500 ">---</div>
                                <div class="table-cell text-center py-1 border-2 border-l-0 border-r-0 border-blue-500">---</div>
                                <div class="table-cell text-center py-1 px-1 border-2 border-l-0 border-blue-500 ">---</div>
                            </div>
                            <div class="flex h-2"></div>
                            <div class="table-row font-roboto font-normal text-black text-sm md:text-base space-y-2 items-center"></div>   
                        </div>
                    @endfor      
                </div>
            </div>    
        </div>         
        <div class="w-full flex flex-col lg:flex-row items-center space-y-5 lg:space-y-0 lg:justify-evenly space-x-2 lg:px-4">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-[90%] lg:w-[90%]">
                <div class="flex flex-col md:flex-row items-center justify-center md:self-start space-y-0.5 md:space-y-0 md:space-x-8 px-4 mb-3 w-full">
                    <p class="font-roboto text-semibold text-black/80 text-base md:text-xl ">Users List</p>
                    <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="select_user" name="select_user">
                        <option value="patient" >Patient</option>
                        <option value="professional" >Professional</option>
                    </select>  
                    <div class="flex flex-row items-center relative w-full md:w-[50%] lg:w-[70%] py-2 md:ml-16">
                        <input type="search" id="for_user" name="search" class="w-full bg-sky-100 border-none rounded-2xl outline-none px-8 lg:px-10 lg:mr-3 py-0 md:py-2 lg:py-2 placeholder:text-[#B87070]" placeholder="Search for Patient">
                        <button class="absolute right-3 md:right-4 lg:right-8" id="search_button" name="search_button" type="button">
                            <img src="{{asset('images/dashboard/search.png')}}" alt="" >
                        </button>
                    </div>    
                </div>
                <div class="table w-full">
                        <div class="table-header-group">
                            <div class="table-row bg-gray-200 font-roboto font-semibold text-black text-xs md:text-sm lg:text-base" id="users-table" name="users-table">
                                <div class="table-cell text-center py-1 lg:w-[30%]">User</div>
                                <div class="table-cell text-center py-1 md:w-[16%] lg:w-[10%] ">Sex</div>
                                <div class="table-cell text-center py-1 hidden md:block ">Email</div>
                                <div class="table-cell text-center py-1 w-[10%] lg:w-[30%]">Address</div>
                                <div class="table-cell text-center py-1 md:w-[15%] lg:w-[10%]">Status</div>
                                <div class="table-cell text-center py-1 md:w-[15%] lg:w-[10%]">Action</div>
                            </div>
                        </div>
                        
                        @foreach($users as $user)
                            <div class="table-row-group ">
                                <div class="table-row font-roboto font-normal text-black text-sm md:text-base space-y-2 items-center" id="users-content" name="users-content">
                                    <div class="table-cell py-1 items-center justify-between  text-center w-1/5 lg:w-[20%] break-keep">
                                        <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="absolute w-5 h-5 left-5 mt-0 hidden lg:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix }}
                                    </div>
                                    <div class="table-cell text-center py-1">{{ $user->sex }}</div>
                                    <div class="table-cell text-center py-1 hidden md:block">{{ $user->email}}</div>
                                    <div class="table-cell text-center py-1">{{ $user->barangay }}, {{ $user->municipality }}</div>
                                    <div class="table-cell text-center py-1 text-">Active</div>
                                    <div class="table-cell items-center justify-center py-1">
                                        <button type = "button" id="remove" name="remove" class="flex items-center  ml-4 md:ml-8 ">
                                            <img src="{{asset('images/dashboard/remove_icon.png')}}" alt="" title="Remove User" class="flex justify-center w-4 h-4  md:w-5 md:h-5">
                                        </button>   
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            

                 </div>
            </div>
        </div>
               
        <div class="flex flex-col lg:flex-row items-center justify-center space-y-4 lg:space-y-0 lg:space-x-6 w-full px-2 md:px-6 mt-4">
            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-full lg:w-full ">
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515]  px-4 text-center bg-gray-200  ">Users Count by Municipality</p>      
                <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                    <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline"  id="select-usersByMunicipality" name="by"> 
                        <option value="All">All</option>
                        <option value="Boac">Boac</option>
                        <option value="Buenavista">Mogpog</option>
                        <option value="Gasan">Santa Cruz</option>
                        <option value="Mogpog">Torrijos</option>
                        <option value="Sta. Cruz">Buenavista</option>
                        <option value="Torrijos">Gasan</option>
                    </select>
                </div>
                    <input type="hidden" id="all_count" name="value">
                    <input type="hidden" id="boac_count" name="value">
                    <input type="hidden" id="buenavista_count" name="value">
                    <input type="hidden" id="gasan_count" name="value">
                    <input type="hidden" id="mogpog_count" name="value"> 
                    <input type="hidden" id="sta.cruz_count" name="value">
                    <input type="hidden" id="torijjos_count" name="value">

                <img src="{{asset('images/login/e3.svg')}}" alt="" class="absolute place-self-start lg:h-[50%]  bottom-0 right-0 ">
                <canvas id="users-count" class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></canvas>
            </div>
            
            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-full lg:w-full ">
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515]  px-4 text-center bg-gray-200  ">Users Who Used Enhanced Med-Bot</p>
                <div class="flex flex-col md:flex-row font-roboto self-center md:space-x-10 pt-2 ">
                            
                    <div class="flex flex-col lg:flex-row justify-center md:justify-end items-center space-y-2 lg:space-y-0 lg:space-x-4 pr-2">
                    
                        <select class="shadow border rounded px-3 h-7 md:h-8 text-sm md:text-base rounded-full text-gray-400 leading-tight focus:outline-none focus:shadow-outline" id="select_used" name="by_used">
                            <option value="weekly" >Weekly</option>
                            <option value="monthly" >Monthly</option>
                            <option value="yearly" >Yearly</option> 
                        </select>  
                    </div> 
                        <input class="hidden flex border-2 rounded-full border-[#969696] mt-2 pl-2 bg-white" type="number" min="1900" max="2050" value="2023" id="year_used" name="value_used">
                        <input class="hidden flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="month" id="month_used" name="value_used">
                        <input class=" flex  border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white " type="week" id="week_used" name="value_used">
                </div>
                <img src="{{asset('images/login/e3.svg')}}" alt="" class="absolute place-self-start lg:h-[50%]  bottom-0 right-0 ">
                <canvas id="countReadings" class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></canvas>
            </div>
        </div>
    </div>

   
    <script src="{{asset('/js/chart.js')}}"></script>
    <script src="{{asset('/js/dashboard_admin.js')}}"></script>
    <script src="{{asset('/js/menu.js')}}"></script>


</body>
</html>