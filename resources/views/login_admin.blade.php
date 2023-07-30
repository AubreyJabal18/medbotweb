<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex flex-col w-screen h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] items-center p-4 md:flex-row md:items-center md:justify-center md:space-x-4 lg:px-12">

        <img src="{{asset('images/login/e1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 hidden md:block">
        
        <div class="flex flex-col space-y-2 justify-center items-center md:w-[30%] ">
            <p class="font-roboto font-semibold text-[#5ececd] text-2xl text-shadow text-center break-keep md:font-bold md:text-4xl lg:text-5xl md:pr-12 lg:pr-16">ENHANCED MEDBOT</p>
            <i class="font-roboto text-white text-sm md:text-xl lg:text-2xl text-center md:pr-12 lg:pr-16
            ">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        </div>
            
          
        <div class="relative flex flex-col p-2 w-[95%] h-[50%] md:w-[50%] md:h-[50%] lg:w-[50%] lg:h-[55%] bg-white items-center rounded-2xl md:rounded-2xl mt-8">

            <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">   
            <p class="flex font-roboto font-bold text-base md:text-2xl lg:text-2xl text-neutral-500 mt-2 md:mt-3 justify-center">Login</p>
            <p class="flex font-roboto justify-center font-normal text-xs md:text-sm lg:text-base text-black mt-5 ">Enter Your Credentials</p>
            
            <form action="/login/admin/process" method="POST" class="h-fit flex flex-col space-y-4 mt-5" id="form"> 
                <div class="grid flex flex-col items-start space-y-1">
                    <label class=" text-gray-700 text-sm font-normal" for="suffix">Email</label>
                    @csrf
                    <input class="shadow appearance-none border rounded h-fit py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email" name="email">
                </div>
                <div class="grid flex flex-col items-start space-y-1">
                    <label class=" text-gray-700 text-sm font-normal" for="suffix">Password</label>
                    <input class="shadow appearance-none border rounded h-fit py-1 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password" name="password">
                </div>

                <div class="flex justify-center items-center my-2 md:my-0">
                    <button id="submit-button" type="button" class="flex items-center justify-center border rounded-full w-24 h-8 bg-[#47B0E1] font-roboto font-medium text-sm text-white md:w-24 md:h-8 mt-5">Submit</button>
                </div>
            </form> 
            
        </div>   
        


        <img src="{{asset('images/login/modelrightsideview.png')}}" alt=" " class="block md:hidden absolute h-[20%] w-[38%] self-start top-[50%] -left-5">

        <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute md:block md:right-2 md:bottom-20 lg:bottom-12 md:right-0 lg:right-10 md:w-[22%] md:h-[25%] lg:w-[18%] lg:h-[30%] self-end">


    </div>

    <script src="{{asset('/js/login_admin.js')}}"></script>

</body>

</html>