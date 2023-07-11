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
    

            <div id="camera-placeholder"  class="flex justify-center w-3/4 md:w-[70%] lg:w-[70%] h-[35%] md:h-[50%] lg:h-[50%] rounded-xl mt-3 md:mt-3 lg:mt-4">          
            </div>  
                
            <button type="button" id="swap-camera" class="flex flex-row items-center justify-center mt-2 px-1 py-1 rounded-full border border-slate-400 font-roboto font-normal text-gray-800 text-[10px] md:text-[10px] md:mt-1 lg:hidden">
                <img src="{{asset('images/login/swap_camera.svg')}}" alt=" " class="w-3 h-3 md:w-4 md:h-4">
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
            
            <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute md:block md:-bottom-6 md:-right-7 lg:-right-8 md:w-[160px] md:h-[160px] lg:w-[200px] lg:h-[190px]">

        </div>

    </div>


    <script src="{{asset('/js/scan_qrcode.js')}}"></script>

</body>

</html>