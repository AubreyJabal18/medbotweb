<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="{{asset('/js/moment.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/mermaid.min.css')}}">
    @vite('resources/css/app.css')

</head>
<body>
    
    <div class="flex flex-col w-screen pb-4">
        
         
        <div class=" flex-col bg-gradient-to-r from-[#0B60D1] to-[#305ab9] bg-cover bg-no-repeat relative pb-5 md:pb-6 lg:pb-0">
            <div class="flex flex-row justify-between items-center px-4 py-3 md:px-10">
                <div class="flex flex-row space-x-4 items-center">
                    <img src={{asset('images/dashboard/logo2.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">Admin</p>
                    <img src="{{asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 hover:brightness-75">
                </div>
                
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">

                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">

                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                
                <x-menu_admin :user="$user"/>
            </div>

            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Dashboard</p>
              
            </div>

            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Welcome, Administrator!</p>
                
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        Here is a list of users that have been deleted. Please feel free to initiate the restoration process for any of these users as needed.
                    </p>
                    
                    
                    <img src="{{asset('images/dashboard/model.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-2 lg:right-12 md:top-[38%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>

        
        <div class="flex flex-col px-6 py-6">
            <p class="font-roboto font-bold text-black/80 text-base md:text-xl lg:text-2xl md:self-start ">Users List</p>
            <div id="restore-table" class=""></div>
        </div>
      
                

            </div>
        </div>
        
    </div>

         <div id="notice-restore-patient" class="hidden fixed flex-col border-2 w-[80%] md:w-[50%] lg:w-[30%] h-[25%] md:h-[25%] rounded-xl items-center  bg-white drop-shadow-lg shadow-lg z-50 top-[40%] left-[10%] md:left-[25%] lg:left-[35%]">
            <div class="flex flex-col md:flex-row space-x-6 space-y-2 md:space-y-0 items-center  md:py-6 lg:py-7 md:px-6">
                <img src="{{asset('images/dashboard/restore_icon.png')}}" alt="" class="flex w-16 md:w-16 md:h-16 lg:w-16 self-center  ">
                <p class="flex font-roboto text-black/80 font-light px-2 md:px-1 text-sm md:text-base lg:text-lg pb-4 md:pb-6">Do you really want to restore this user?</p>
            </div>
            <div class="flex flex-row justify-end space-x-2  px-2 md:px-4">
                <button id="cancel-button" class="flex flex items-center justify-center font-roboto font-normal text-neutral-500 md:hover:rounded-lg hover:text-white hover:bg-neutral-400 py-1 px-4 text-sm lg:text-base">Cancel</button>
                <button id="restore-button" class="flex items-center justify-center font-roboto font-normal text-white rounded-lg bg-green-600 md:hover:bg-green-600 py-1 px-3 text-sm  lg:text-base">Restore</button>
            </div>    

            <form action="/restore" method="POST" id="restore-form">
                @csrf
                <input type="text" id="restore-id" name="id" class="hidden">
            </form>
        </div>

        <div id="confirm-restore-overlay" class=" hidden fixed w-full h-100 inset-0 z-10 overflow-hidden flex justify-center items-center brightness-50 backdrop-blur-sm">
        </div> 
    </div>

    <script src="{{asset('/js/gridjs.umd.js')}}"></script>
    <script src="{{asset('/js/restore_deleted_user.js')}}"></script>

</body>
</html>