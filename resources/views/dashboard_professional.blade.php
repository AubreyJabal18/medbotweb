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

        <div class="flex flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat relative pb-5 md:pb-6 lg:pb-0">
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

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 px-4 md:flex-row md:justify-between md:px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
                <div class="flex flex-row items-center relative w-3/5 md:w-2/5">
                    <input type="text" class="w-full bg-[#DDD9D9]/50 border-none rounded-2xl outline-none px-5 lg:mr-3 py-1 md:py-2 lg:py-2 placeholder:text-[#B87070]" placeholder="Search for user">
                    <img src="{{asset('images/dashboard/search.png')}}" alt="" class="absolute right-3 md:right-4 lg:right-8 scale-125">
                </div>
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Hello Dr. Rylene Grace,</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        We sincerely appreciate your effort in reviewing the vital sign measurements history of patients. Your attention to their progress will greatly contribute to their well-being. 
                    </p>
                    
                    
                    <img src="{{asset('images/login/modelleftsideview.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-8 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <div class="flex flex-col px-4 items-center space-y-5 lg:flex-row lg:justify-evenly lg:items-start lg:space-y-0">
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
            
            {{-- STATISTICS --}}
            <div class="w-[90%] flex flex-col items-center p-2 rounded-xl drop-shadow-none shadow-lg h-96 border  border-gray-300  md:w-4/5 lg:w-[45%] px-4 ">
                <div class="flex font-roboto flex-row self-start space-x-10 ">
                    <p class="flex font-bold text-black/80 text-xl md:text-2xl lg:text-2xl mt-1">Statistics</p>
                    
                    <button class="flex h-6 w-15 md:h-8 md:w-18 lg:h-6 lg:w-18 border-2 rounded-full border-[#969696] mt-2 px-2 space-x-2 md:space-x-3 lg:space-x-4 bg-[#F2F2F2]">
                        <p class="flex text-sm md:text-sm lg:text-sm text-slate-500 py-0 md:py-1 lg:py-0 lg:ml-2">Week</p>
                        <img src="{{asset('images/dashboard/calendar.png')}}" alt="" class="flex flex-row h-3 w-3 lg:h-3 lg:w-3 mt-1 md:mt-2 lg:mt-1">
                    </button>  
                </div>
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515] mt-4 md:mt-4 lg:mt-4 px-4 text-center">Users Using Enhanced Med-Bot</p>
                <div class="absolute items-center self-center drop-shadow-lg shadow-lg h-[55%] w-[80%] rounded-lg bg-white top-28 md:top-28 "></div>

            </div>
        </div>

            <div class="flex pl-2 md:pl-6 lg:pl-10 pt-5 md:pt-6 lg:pt-10 self-center md:self-start">
                <p class="flex font-bold text-lg md:text-xl lg:text-2xl">Patient's Demographic Profile</p>
            </div>            
            <div class="flex pl-3 md:pl-8 lg:pl-16  md:pt-2 lg:pt-2 items-center justify-center space-x-2 self-center md:self-start">
                <button class="flex flex-row items-center h-7 md:h-8 lg:h-8 w-28 md:w-32 lg:w-32 bg-[#F2F2F2] rounded-2xl mt-1 border-2  border-[#969696]">
                    <p class="flex text-sm md:text-lg lg:text-lg text-slate-500  ml-2 ">Municipality</p>
                    <img src="{{asset('images/dashboard/dropdown.png')}}" alt="" class="flex flex-row h-2 w-2 lg:h-2 lg:w-2 mt-0.5 md:mt-0.5 lg:mt-0.5 ml-2 md:ml-2 lg:ml-1.5">
                </button>
    
                 <button class="flex flex-row items-center h-7 md:h-8 lg:h-8 w-24 md:w-28 lg:w-28 bg-[#F2F2F2] rounded-2xl mt-1 border-2  border-[#969696]">
                     <p class="flex text-sm md:text-lg lg:text-lg text-slate-500  ml-2 ">Barangay</p>
                    <img src="{{asset('images/dashboard/dropdown.png')}}" alt="" class="flex flex-row h-2 w-2 lg:h-2 lg:w-2 mt-0.5 md:mt-0.5 lg:mt-0.5 ml-3 md:ml-3.5 lg:ml-3">
                 </button>     
            </div>
            <div class="flex flex-row items-center rounded-xl drop-shadow-none shadow-lg space-x-8 py-6 px-8"> 
                <div class="flex h-52 md:h-72 lg:h-96 border border-gray-300 w-[45%] md:w-4/5 lg:w-[45%]  self-start md:self-start rounded-2xl  ">
                <div class="flex h-52  md:h-72 lg:h-96 border  border-gray-300 w-[45%] md:w-4/5 lg:w-[45%] self-end md:self-end rounded-2xl ml-6">
            </div>
            







            </div>
        </div>
        

 


    @if(Session::has('id'))
    <script>
        const id = {{session()->get('id')}};
        window.open('/get/qrcode?id='+id, '_self');
    </script>
@endif

</body>
</html>