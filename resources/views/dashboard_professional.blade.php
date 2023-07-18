<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Professional Dashboard</title>
    @vite('resources/css/app.css')

</head>
<body>
    
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
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Hello Dr. Rylene Grace,</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        We sincerely appreciate your effort in reviewing the vital sign measurements history of patients. Your attention to their progress will greatly contribute to their well-being. 
                    </p>
                    
                    
                    <img src="{{asset('images/login/modelleftsideview.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <div class="w-full flex flex-col items-center space-y-5 lg:flex-row lg:justify-evenly lg:items-start lg:space-y-0">
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-[45%]">
                <p class="font-roboto text-semibold text-black/80 text-base mb-2 md:text-xl">Recent Patients</p>
                <div class="table w-full">
                    <div class="table-header-group">
                        <div class="table-row bg-gray-200 font-roboto font-semibold text-black text-sm md:text-base">
                            <div class="table-cell text-center py-1">Name</div>
                            <div class="table-cell text-center py-1">Sex</div>
                            <div class="table-cell text-center py-1">Address</div>
                            <div class="table-cell text-center py-1">Date</div>
                            <div class="table-cell text-center py-1">Status</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row font-roboto font-normal text-black text-sm md:text-base">
                            <div class="table-cell text-center py-1">Aubrey Jabal</div>
                            <div class="table-cell text-center py-1">Female</div>
                            <div class="table-cell text-center py-1">Ihatub, Boac</div>
                            <div class="table-cell text-center py-1">July 4, 2023</div>
                            <div class="table-cell text-center py-1">Normal</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-[90%] flex flex-col items-center p-4 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 md:w-4/5 lg:w-[45%]">
                <div class="flex flex-col md:flex-row font-roboto self-start md:space-x-10">
                    <p class="flex font-bold text-black/80 text-xl md:text-2xl lg:text-2xl mt-1">Statistics</p>
                    
                    <div class="flex h-6 w-15 md:h-6 md:w-18 lg:h-6 lg:w-18 border-2 rounded-full border-[#969696] mt-2 px-2 md:space-x-3 lg:space-x-4 bg-white  ">
                        <select class="flex text-sm md:text-sm lg:text-sm text-slate-500 py-0 lg:ml-2 focus:outline-none" id="select" name="select">
                            <option disabled selected hidden value="null" >Select</option>
                            <option value="yearly" >Yearly</option> 
                            <option value="monthly" >Monthly</option>
                            <option value="weekly" >Weekly</option>
                        </select>    
                        <input class="hidden" type="number" min="1900" max="2050" value="2023" id="year" name="year">
                        <input class="hidden" type="month" id="month" name="month">
                        <input class="hidden" type="week" id="week" name="week">
                    </div> 
             
                </div>
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515] mt-4 md:mt-4 lg:mt-4 px-4 text-center">Patient's Using Enhanced Med-Bot</p>
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></div>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center md:justify-start md:flex-row space-x-6 px-5 ">
            <p class="flex text-lg md:text-xl lg:text-2xl font-roboto font-bold pt-8 pl-5">Measurement's Statistics</p>
            <div class="flex h-8 w-18 md:h-8 md:w-18 lg:h-8 lg:w-18 border-2 rounded-full border-[#969696] mt-2 md:mt-8 px-3 bg-white ">
                <select class="flex text-lg md:text-lg lg:text-xl text-slate-500 lg:ml-2 focus:outline-none" id="measure_select" name="measure_select">
                    <option disabled selected hidden value="null" >Select</option>
                    <option value="yearly" >Yearly</option> 
                    <option value="monthly" >Monthly</option>
                    <option value="weekly" >Weekly</option>
                </select>    
                <input class="hidden" type="number" min="1900" max="2050" value="2023" id="measure_year" name="measure_year">
                <input class="hidden" type="month" id="measure_month" name="measure_month">
                <input class="hidden" type="week" id="measure_week" name="measure_week">
            </div> 
        </div>
        
        <div class="flex flex-row justify-center py-5 md:px-12">
            <div class="drop-shadow-lg shadow-lg h-96 w-4/5 lg:w-3/5 lg:h-96 rounded-xl bg-white border-2">
                <div class="flex flex-row md:flex-col items-center py-2 px-2 space-x-3 focus:outline-none md:items-start md:space-y-3 md:py-24 ">
                    <button class="flex font-robot text-base md:text-xl lg:text-xl bg-[#0B60D1] text-white md:ml-3 h-8 md:h-9 w-12 md:w-14 border-2 rounded-2xl items-center justify-center">BP</button>
                    <button class="flex font-robot text-base md:text-xl lg:text-xl bg-[#0B60D1] text-white h-8 md:h-9 w-12 md:w-14 border-2 rounded-2xl items-center justify-center">BS</button>
                    <button class="flex font-robot text-base md:text-lg lg:text-xl bg-[#0B60D1] text-white h-8 md:h-9 w-14 md:w-14 border-2 rounded-2xl items-center justify-center">Temp</button>
                    <button class="flex font-robot text-base md:text-xl lg:text-xl bg-[#0B60D1] text-white h-8 md:h-9 w-14 border-2 rounded-2xl items-center justify-center">PR</button>
                </div>
                <div class="absolute h-[82%] w-[90%] md:h-[90%] md:w-[70%] lg:h-[92%] lg:w-[86%] bg-white drop-shadow-lg shadow-lg border-2 left-[5%] md:left-[17%] lg:left-[12%] top-[14%] md:top-[5%] lg:top-[4%] rounded-2xl"></div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row md:justify-between items-center py-5 px-5">
            <p class="flex font-bold text-lg md:text-xl lg:text-2xl self-center md:self-start md:mt-2 mb-2 font-roboto">Patient's Demographic Profile</p>
            
            <div class="flex flex-col md:flex-row justify-center md:justify-end items-center md:space-x-4 pr-6">
                <select class="shadow border rounded px-3 h-9 md:h-10 text-sm md:text-lg rounded-2xl text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="municipality" name="municipality">
                    <option disabled selected hidden value="null">Select a Municipality</option>
                    <option value="Boac">Boac</option>
                    <option value="Buenavista">Buenavista</option>
                    <option value="Gasan">Gasan</option>
                    <option value="Mogpog">Mogpog</option>
                    <option value="Sta. Cruz">Santa Cruz</option>
                    <option value="Torrijos">Torrijos</option>
                </select>
                <select class="shadow border rounded-2xl px-3 mt-2 md:mt-0 h-9 md:h-10 text-sm md:text-lg text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="barangay" name="barangay">
                    <option disabled selected hidden value="null">Select a Barangay</option>
                </select>
            </div>
        </div>           
        <div class="flex flex-col md:flex-row items-center justify-center rounded-xl md:space-x-8 py-4 px-4 "> 
            <div class="flex h-72 md:h-72 lg:h-96 border border-gray-300 w-[90%] md:w-4/5 lg:w-[40%] rounded-2xl bg-white drop-shadow-lg shadow-lg "> </div>
            <div class="flex h-72 md:h-72 lg:h-96 border border-gray-300 w-[90%] md:w-4/5 lg:w-[40%] rounded-2xl mt-4 md:mt-0 bg-white drop-shadow-lg shadow-lg"> </div>
        </div>
            
    </div>

    <script src="{{ asset('/js/barangay.js') }}"></script>
    <script src="{{asset('/js/dashboard_professional.js')}}"></script>
    


    @if(Session::has('id'))
    <script>
        const id = {{session()->get('id')}};
        window.open('/get/qrcode?id='+id, '_self');
    </script>
@endif

</body>
</html>