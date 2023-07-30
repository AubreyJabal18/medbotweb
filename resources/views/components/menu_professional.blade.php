<div id="menu" class=" hidden flex flex-col absolute z-50 w-3/4 md:w-1/5 h-full bg-white rounded-md drop-shadow-md top-16 right-2 px-8 py-4">
    <div class="flex flex-col items-center">
        <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="w-16 h-16 m-2">
        <p class="font-roboto font-bold">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
        <p class="font-roboto">Patient</p> 
    </div>
    
    <div class="flex flex-col mt-8 ">
        <p class="font-roboto font-bold text-xl">General</p>
        
        <div class="flex flex-row mt-5 space-x-5">
            <img src="{{asset('images/dashboard/dashboard2.svg')}}" alt="" class="w-6">
            <p class="font-roboto">Dashboard</p>
        </div>

        <div class="flex flex-row mt-5 space-x-5">
            <img src="{{asset('images/dashboard/Account.svg')}}" alt="" class="w-6">
            <p class="font-roboto">Patients</p>
        </div>

        <div class="flex flex-row mt-5 space-x-5">
            <img src="{{asset('images/dashboard/dashboard2.svg')}}" alt="" class="w-6">
            <p class="font-roboto">Readings</p>
        </div>
    </div>
</div>

<script src="{{asset('/js/menu.js')}}"></script>