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
                <div class="flex font-roboto flex-row self-start space-x-10 ">
                    <p class="flex font-bold text-black/80 text-xl md:text-2xl lg:text-2xl mt-1">Statistics</p>
                    
                    <button class="flex h-6 w-15 md:h-8 md:w-18 lg:h-6 lg:w-18 border-2 rounded-full border-[#969696] mt-2 px-2 space-x-2 md:space-x-3 lg:space-x-4 bg-[#F2F2F2]">
                        <p class="flex text-sm md:text-sm lg:text-sm text-slate-500 py-0 md:py-1 lg:py-0 lg:ml-2">Week</p>
                        <img src="{{asset('images/dashboard/calendar.png')}}" alt="" class="flex flex-row h-3 w-3 lg:h-3 lg:w-3 mt-1 md:mt-2 lg:mt-1">
                    </button>  
                </div>
                <p class="flex font-roboto font-normal self-center leading-normal text-base md:text-lg lg:text-xl  text-[#151515] mt-4 md:mt-4 lg:mt-4 px-4 text-center">Users Using Enhanced Med-Bot</p>
                <div class="mt-4 flex drop-shadow-lg shadow-lg h-96 w-full rounded-lg bg-white"></div>
            </div>
        </div>

        <div class="flex flex-row justify-between items-center p-5">
            <p class="flex font-bold text-lg md:text-xl lg:text-2xl">Patient's Demographic Profile</p>
            <div class="flex flex-row justify-end items-center space-x-4">
                <select class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="municipality" name="municipality">
                    <option disabled selected hidden value="null">Select a Municipality</option>
                    <option value="Boac">Boac</option>
                    <option value="Buenavista">Buenavista</option>
                    <option value="Gasan">Gasan</option>
                    <option value="Mogpog">Mogpog</option>
                    <option value="Sta. Cruz">Santa Cruz</option>
                    <option value="Torrijos">Torrijos</option>
                </select>
                <select class="shadow border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="municipality" name="barangay">
                    <option disabled selected hidden value="null">Select a Barangay</option>
                </select>
            </div>
        </div>           
        <div class="flex flex-row items-center justify-center rounded-xl drop-shadow-none shadow-lg space-x-8 py-6 px-8"> 
            <div class="flex h-52 md:h-72 lg:h-96 border border-gray-300 w-[45%] md:w-4/5 lg:w-[40%] rounded-2xl  "> </div>
            <div class="flex h-52  md:h-72 lg:h-96 border  border-gray-300 w-[45%] md:w-4/5 lg:w-[40%] rounded-2xl"> </div>
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