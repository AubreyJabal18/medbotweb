<div id="menu" class=" hidden flex flex-col absolute z-50 w-3/4 md:w-1/5 h-fit bg-white rounded-md drop-shadow-md top-16 right-2 px-8 py-4">
    <div class="flex flex-col items-center">
        <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="w-16 h-16 m-2">
        <p class="font-roboto font-bold text-center">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
        <p class="font-roboto">Admin</p> 
    </div>
    
    <div class="flex flex-col mt-8">
        <p class="font-roboto font-bold text-xl mb-2">General</p>
        <a href="/dashboard">
            <div class="group flex flex-row p-2 space-x-5 hover:bg-blue-300">
                <svg class="fill-[#6B7280] group-hover:fill-white" width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Vector" d="M16.8889 2.33333V4.66667H12.6667V2.33333H16.8889ZM6.33333 2.33333V9.33333H2.11111V2.33333H6.33333ZM16.8889 11.6667V18.6667H12.6667V11.6667H16.8889ZM6.33333 16.3333V18.6667H2.11111V16.3333H6.33333ZM19 0H10.5556V7H19V0ZM8.44444 0H0V11.6667H8.44444V0ZM19 9.33333H10.5556V21H19V9.33333ZM8.44444 14H0V21H8.44444V14Z"/>
                </svg>
                <p class="font-roboto group-hover:text-white">Dashboard</p>
            </div>
        </a>

        <a href="/restore/deleted_user">
            <div class="group flex flex-row p-2 space-x-5 hover:bg-blue-300">
                <img src="{{asset('images/dashboard/restore.png')}}" alt="" class = "h-6 w-6">
                <p class="font-roboto group-hover:text-white">Restore Deleted User</p>
            </div>
        </a>

        <a href="/logout">
            <div class="group flex flex-row p-2 space-x-5 hover:bg-blue-300">
                <svg class="fill-[#6B7280] group-hover:fill-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 17V14H9V10H16V7L21 12L16 17ZM14 2C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6H14V4H5V20H14V18H16V20C16 20.5304 15.7893 21.0391 15.4142 21.4142C15.0391 21.7893 14.5304 22 14 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V4C3 3.46957 3.21071 2.96086 3.58579 2.58579C3.96086 2.21071 4.46957 2 5 2H14Z"/>
                </svg>                                       
                <p class="font-roboto group-hover:text-white">Logout</p>
            </div>
        </a>
    </div>
</div>

<script src="{{asset('/js/menu.js')}}"></script>
