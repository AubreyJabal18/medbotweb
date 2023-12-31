<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Login</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('/js/html5-qrcode.min.js') }}" type="text/javascript">
    
</head>
<body>
    
    <div class="flex flex-col w-screen h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] items-center p-4 md:flex-row md:items-center md:justify-center md:space-x-4 lg:px-4">

        <img src="{{asset('images/login/accent.svg')}}" alt="" class="absolute place-self-start bottom-0 left-0 hidden md:block lg:h-60">
        
        <div class="flex flex-col space-y-2 justify-center items-center md:w-2/5">
            <p class="font-roboto font-semibold text-[#5ececd] text-2xl text-shadow text-center break-keep md:font-bold md:text-4xl lg:text-5xl">ENHANCED MEDBOT</p>
            <i class="font-roboto text-white text-sm text-center md:text-xl lg:text-2xl">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        </div>
        <div class="relative flex flex-col p-2 w-4/5 h-fit bg-white items-center rounded-2xl mt-8 md:w-[50%] md:h-4/5 md:rounded-2xl lg:w-[50%] lg:h-4/5">
            <a href="/">
                <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute self-start left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">   
            </a>
            <p class="flex font-roboto font-bold text-lg md:text-2xl lg:text-3xl text-neutral-500 mt-3 md:mt-4">Welcome !
            <p class="flex font-roboto items-center font-bold text-sm text-neutral-500 mt-4 md:text-sm md:mt-6 lg:text-lg">Scan your QR Code</p></p>
            <div id="camera-placeholder"  class="flex justify-center w-3/4 h-[35%] rounded-xl mt-3 md:w-[70%] md:h-[50%] md:mt-3 lg:w-[70%] lg:h-[50%] lg:mt-4">          
            </div>  
            <button type="button" id="swap-camera" class="flex flex-row items-center justify-center mt-2 px-1 py-1 rounded-full border border-slate-400 font-roboto font-normal text-gray-800 text-[10px] md:text-[10px] md:mt-1 lg:hidden">
                <img src="{{asset('images/login/swap_camera.svg')}}" alt=" " class="w-3 h-3 md:w-4 md:h-4">
            </button>
            <form action="/login/process" method="POST" class="hidden" id="login-form">
                @csrf
                <input type="text" placeholder="Enter encrypted qrcode" id="qrcode" name="qrcode" required="">
            </form>      
            <div class="flex flex-row items-center mt-4">
                <a href="/login/camera">
                    <div class="flex flex-row justify-center items-center space-x-3 py-1 px-3  rounded-l-full border-2 bg-[#507BDA]">
                        <p class="font-roboto text-white font-base text-sm md:text-base">Camera</p>
                    </div>
                </a>
                <a href="/login/upload">
                    <div class="flex flex-row justify-center items-center space-x-3 py-1 px-3 rounded-r-full border">
                        <p class="font-roboto text-[#2D3748] font-base text-sm md:text-base">Upload</p>
                    </div>
                </a>
            </div>
            <p class="flex mt-4 font-roboto text-sm font-medium text-[#2D3748] text-center md:text-base">Don't have an account? &nbsp;<span><a href="/register/user" class="font-roboto text-blue-500 hover:text-blue-700 text-sm md:text-base justify-self-center underline">Register here</a></span></p>
        </div>
        <div class="absolute bottom-[25%] md:bottom-10 md:right-[17%] lg:bottom-5 lg:right-[22%]">
            <p class="flex mt-12 font-roboto text-xs font-medium text-neutral-300 text-center ">Lost your QR Code? &nbsp;<span><a href="/retrieve_qrcode" class="font-roboto text-neutral-300 hover:text-white text-xs justify-self-center underline">Retrieve it here</a></span></p>
        </div>
        
        <img src="{{asset('images/login/model.png')}}" alt=" " class="hidden absolute md:block md:-bottom-6 md:-right-7 lg:-right-8 md:w-[160px] md:h-[160px] lg:w-[200px] lg:h-[190px]">
    </div>

    <script src="{{asset('/js/scan_qrcode.js')}}"></script>

</body>

</html>