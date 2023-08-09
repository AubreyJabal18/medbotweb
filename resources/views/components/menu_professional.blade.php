<div id="menu" class=" hidden flex flex-col absolute z-50 w-3/4 md:w-1/5 h-fit bg-white rounded-md drop-shadow-md top-16 right-2 px-8 py-4">
    <div class="flex flex-col items-center">
        <img src="{{asset('images/dashboard/profile.png')}}" alt="" class="w-16 h-16 m-2">
        <p class="font-roboto font-bold text-center">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
        <p class="font-roboto">Professional</p> 
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
        <a href="/patients">
            <div class="group flex flex-row p-2 space-x-5 hover:bg-blue-300">
                <svg class="fill-[#6B7280] group-hover:fill-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5C11.0717 5 10.1815 5.36875 9.52513 6.02513C8.86875 6.6815 8.5 7.57174 8.5 8.5C8.5 9.42826 8.86875 10.3185 9.52513 10.9749C10.1815 11.6313 11.0717 12 12 12C12.9283 12 13.8185 11.6313 14.4749 10.9749C15.1313 10.3185 15.5 9.42826 15.5 8.5C15.5 7.57174 15.1313 6.6815 14.4749 6.02513C13.8185 5.36875 12.9283 5 12 5ZM12 7C12.3978 7 12.7794 7.15804 13.0607 7.43934C13.342 7.72064 13.5 8.10218 13.5 8.5C13.5 8.89782 13.342 9.27936 13.0607 9.56066C12.7794 9.84196 12.3978 10 12 10C11.6022 10 11.2206 9.84196 10.9393 9.56066C10.658 9.27936 10.5 8.89782 10.5 8.5C10.5 8.10218 10.658 7.72064 10.9393 7.43934C11.2206 7.15804 11.6022 7 12 7ZM5.5 8C4.83696 8 4.20107 8.26339 3.73223 8.73223C3.26339 9.20107 3 9.83696 3 10.5C3 11.44 3.53 12.25 4.29 12.68C4.65 12.88 5.06 13 5.5 13C5.94 13 6.35 12.88 6.71 12.68C7.08 12.47 7.39 12.17 7.62 11.81C6.89 10.86 6.5 9.7 6.5 8.5C6.5 8.41 6.5 8.31 6.5 8.22C6.2 8.08 5.86 8 5.5 8ZM18.5 8C18.14 8 17.8 8.08 17.5 8.22C17.5 8.31 17.5 8.41 17.5 8.5C17.5 9.7 17.11 10.86 16.38 11.81C16.5 12 16.63 12.15 16.78 12.3C16.94 12.45 17.1 12.58 17.29 12.68C17.65 12.88 18.06 13 18.5 13C18.94 13 19.35 12.88 19.71 12.68C20.47 12.25 21 11.44 21 10.5C21 9.83696 20.7366 9.20107 20.2678 8.73223C19.7989 8.26339 19.163 8 18.5 8ZM12 14C9.66 14 5 15.17 5 17.5V19H19V17.5C19 15.17 14.34 14 12 14ZM4.71 14.55C2.78 14.78 0 15.76 0 17.5V19H3V17.07C3 16.06 3.69 15.22 4.71 14.55ZM19.29 14.55C20.31 15.22 21 16.06 21 17.07V19H24V17.5C24 15.76 21.22 14.78 19.29 14.55ZM12 16C13.53 16 15.24 16.5 16.23 17H7.77C8.76 16.5 10.47 16 12 16Z"/>
                </svg>                    
                <p class="font-roboto group-hover:text-white">Patients</p>
            </div>
        </a>
        <a href="">
            <div class="group flex flex-row p-2 space-x-5 hover:bg-blue-300">
                <svg class="fill-[#6B7280] group-hover:fill-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 3H14.82C14.4 1.84 13.3 1 12 1C10.7 1 9.6 1.84 9.18 3H5C4.46957 3 3.96086 3.21071 3.58579 3.58579C3.21071 3.96086 3 4.46957 3 5V19C3 19.5304 3.21071 20.0391 3.58579 20.4142C3.96086 20.7893 4.46957 21 5 21H19C19.5304 21 20.0391 20.7893 20.4142 20.4142C20.7893 20.0391 21 19.5304 21 19V5C21 4.46957 20.7893 3.96086 20.4142 3.58579C20.0391 3.21071 19.5304 3 19 3ZM12 3C12.2652 3 12.5196 3.10536 12.7071 3.29289C12.8946 3.48043 13 3.73478 13 4C13 4.26522 12.8946 4.51957 12.7071 4.70711C12.5196 4.89464 12.2652 5 12 5C11.7348 5 11.4804 4.89464 11.2929 4.70711C11.1054 4.51957 11 4.26522 11 4C11 3.73478 11.1054 3.48043 11.2929 3.29289C11.4804 3.10536 11.7348 3 12 3ZM5 15H8.11L9.62 12.15L10.38 17.92L14.07 13.21L15.89 15H19V19H5V15ZM19 13.46H16.53L13.93 10.86L11.44 14.05L10.5 7.08L7.17 13.46H5V5H7V6H17V5H19V6V13.46Z"/>
                </svg>                    
                <p class="font-roboto group-hover:text-white">Readings</p>
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
