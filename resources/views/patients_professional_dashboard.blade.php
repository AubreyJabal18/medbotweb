<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Professional Dashboard Patients List</title>
    <script src="{{asset('/js/moment.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/mermaid.min.css')}}">
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
                    <a href="/">
                        <img src={{asset('images/dashboard/logo2.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
                    </a>
                    <p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
                </div>
                <div class="flex flex-row space-x-4 items-center justify-end">
                    <p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
                    <img src="{{ $user->profile != null ? asset('storage/' . $user->profile) : asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 rounded-full hover:brightness-75">
                </div>
                <img src="{{asset('images/dashboard/tri1.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-2/5 lg:h-1/5 lg:w-2/5 left-0 top-[95%] md:top-[88%] lg:top-[85%]">
                <img src="{{asset('images/dashboard/tri2.png')}}" alt="" class="absolute place-self-start w-4/5 md:w-5/6 lg:h-1/5 lg:w-4/5 left-[10%] md:left-[9%] lg:left-[11%] top-[95%] md:top-[89%] lg:top-[90%] ">
                <img src="{{asset('images/dashboard/tri3.png')}}" alt="" class="absolute place-self-start w-2/5 md:w-1/5 md:h-1/5 lg:h-2/5 lg:w-1/5 left-[60%] md:left-[80%] lg:left-[80%] top-[91%] md:top-[84%] lg:top-[80%] ">
                <x-menu_professional :user="$user"/>
            </div>
            <div class="flex flex-col items-center justify-center bg-[#F3EFEF]/50 py-2 md:py-4 lg:py-5 md:flex-row md:justify-between px-10">
                <p class="font-roboto font-semibold text-[#A03B3B] text-lg md:text-2xl">Patients</p>
            </div>
            <div class="flex flex-col justify-center py-8 px-4">
                <p class="font-roboto font-medium text-white text-xl md:text-2xl lg:text-2xl md:ml-3 md:text-2xl">Hello {{$user->honorific}} {{$user->last_name}},</p>
                <div class="flex flex-col lg:space-y-1 mb-[5%] md:mb-[10%] lg:mb-[10%] md:text-left md:mr-[20%] lg:mr-[30%]">
                    <p class="font-roboto font-normal text-white text-md md:text-xl lg:text-2xl mx-2 md:mx-8 lg:mx-8 mt-2 md:mt-3 lg:mt-3">
                        Welcome to the Patients Page, where you can access a comprehensive list of patients and their medical information, empowering you to deliver top-notch care with cutting-edge support.
                    </p>
                    <img src="{{asset('images/dashboard/model.png')}}" alt="" class="absolute self-end md:h-[50%] md:w-[30%] lg:h-[55%] lg:w-[20%] md:right-0 lg:right-12 md:top-[42%] lg:top-[33%] hidden md:block">
                </div>
            </div> 
        </div>
        
        <p class="flex font-bold font-roboto text-black/80 text-xl md:text-xl lg:text-2xl py-5 md:py-7 lg:py-4 justify-center md:justify-start md:px-10">Patient's List</p>
        <div id="patients-table" class="px-6"></div>

        {{-- <table class="">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Sex</th>
                    <th>Birthday</th>
                    <th>Address</th>
                    <th>Sex</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mike</td>
                    <td><b>mike@example.com</b></td>
                </tr>
            </tbody>
        </table> --}}

        
    </div>

    <script src="{{asset('/js/gridjs.umd.js')}}"></script>
    <script src="{{asset('/js/patients_professional_dashboard.js')}}"></script>

</body>    
</html>    