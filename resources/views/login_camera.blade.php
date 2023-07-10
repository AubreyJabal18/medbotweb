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

        <img src="{{asset('images/login/e1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 hidden md:block">
        
        <div class="flex flex-col space-y-2 justify-center items-center md:w-2/5">
            <p class="font-roboto font-semibold text-[#5ececd] text-2xl text-shadow text-center break-keep md:font-bold md:text-4xl lg:text-5xl">ENHANCED MEDBOT</p>
            <i class="font-roboto text-white text-sm md:text-xl lg:text-2xl text-center">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        </div>
    
    
        <div class="relative flex flex-col p-2 w-4/5 h-[70%] bg-white items-center rounded-2xl md:rounded-2xl mt-8 md:w-[50%] md:h-4/5 lg:w-[50%] lg:h-4/5">

            <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute self-start left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">   
            <p class="flex font-roboto font-bold text-lg md:text-2xl lg:text-3xl text-neutral-500 mt-3 md:mt-4">Welcome !
            <p class="flex font-roboto items-center font-bold text-sm md:text-sm lg:text-lg text-neutral-500 mt-4 md:mt-6">Scan your QR Code</p></p>
    

            <div id="camera-placeholder"  class="flex justify-center w-3/4 md:w-[70%] lg:w-[70%] h-[35%] md:h-[50%] lg:h-[50%] rounded-xl mt-5 ">          
            </div>  
                
            <button type="button" id="swap-camera" class="flex flex-row items-center justify-center mt-4 px-2 py-1 rounded-full border border-slate-400 font-roboto font-normal text-gray-800 text-sm md:mt-0 lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class="h-4 w-4 mr-2">
                    <path d="M480-266q72 0 121-50.5T650-440q0-5-.5-8t-2.5-8h-60q-1 5 1 8t2 8q0 45-33 79.5T480-326H351q18 27 53.5 43.5T480-266ZM310-416h55q1-5 3-12t2-12q0-44 32.5-75t77.5-31h131q-23-27-57.5-43.5T480-606q-73 0-121.5 47T310-440q0 5 .5 12t-.5 12ZM140-120q-24 0-42-18t-18-42v-513q0-23 18-41.5t42-18.5h147l73-87h240l73 87h147q23 0 41.5 18.5T880-693v513q0 24-18.5 42T820-120H140Zm680-60v-513H645l-73-87H388l-73 87H140v513h680ZM480-480Z"/>
                </svg>
                Swap Camera
            </button>

            <form action="/login/camera/process" method="POST" class="hidden" id="login-form">
                @csrf 
                <input type="text" placeholder="Enter encrypted qrcode" id="qrcode" name="qrcode" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" style="display: none;" required="">
            </form> 

                    
            <div class="flex flex-row items-center mt-4">

                    {{-- CAMERA BUTTON --}}
                <a href="/login/camera" class="flex justify-items-center bg-[#e8def8] h-5 md:h-6 w-19 md:w-15 border-slate-400 border-[1px] rounded-s-full md:rounded-s-full font-roboto text-[10px] md:text-[12px] font-light ">
                    <div class="flex flex-row" >
                        <img src="{{asset('images/login/select.svg')}}" alt=" " class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-3 md:h-3 w-3 md:w-3 ">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto ">
                        Camera</div>    
                    </div>
                </a>

                    {{-- UPLOAD BUTTON  --}}
                <a href="/login/upload" class="flex justify-items-center h-5 md:h-6 w-19 md:w-15 bg-white border-slate-400 border-[1px] rounded-e-full md:rounded-e-ful font-roboto text-[10px] md:text-[12px] font-light">
                    <div class="flex flex-row">
                        <img src="{{asset('images/login/select.svg')}}" alt=" "  class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-3 md:h-3 w-3 md:w-3">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto ">
                        Upload</div>   
                    </div>
                </a>
            </div>
            
            <p class="w-full absolute bottom-3 text-center text-[#919191] font-bold font-roboto text-[10px] md:text-[13px]">Don't have an account? &nbsp;<span><a href="/register/user" class="font-roboto text-blue-500 hover:text-blue-700 text-[10px] md:text-[13px] justify-self-center underline">Register here</a></span></p>
            <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute md:block md:bottom-5 md:-right-9 md:w-[180px] md:h-[170px] lg:w-[200px] lg:h-[190px]">

        </div>

    </div>


    <script src="{{asset('/js/scan_qrcode.js')}}"></script>

</body>

</html>