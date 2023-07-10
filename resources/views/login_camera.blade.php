<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Login</title>
    @vite('resources/css/app.css')
    <script src="./node_modules/html5-qrcode/html5-qrcode.min.js"></script>
    
</head>
<body>
    
    <div class="flex h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] flex-col items-center px-4 md:px-1 lg:px-4">

        <img src="{{asset('images/login/e1.svg')}}" alt="" class="absolute place-self-start lg:h-60 bottom-0 left-0 hidden md:block">
        
          {{-- text visible for small screen --}}

          <p class="flex flex-col block md:hidden text-2xl lg:text-4xl font-semibold md:font-bold justify-self-center font-roboto text-[#5ececd] mt-5 lg:mt-5 text-shadow text-center">ENHANCED MED-BOT</p>
          <i class="flex flex-col block md:hidden font-roboto text-white mt-0 lg:mt-1 justify-self-center text-sm lg:text-lg mb-3 lg:mb-4 text-center">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
  
          {{-- text visible for large screen --}}
          
          <div class="flex absolute flex-col place-self-start md:left-5 lg:left-20">
              <p class="flex flex-col hidden md:block text-2xl md:text-3xl lg:text-5xl font-semibold md:font-bold justify-self-center font-roboto text-[#5ececd] md:mr-16 md:mt-52 text-shadow text-center">ENHANCED MED-BOT</p>
              <i class="flex flex-col hidden md:block font-roboto text-white md:mr-16 lg:mt-5 justify-self-center text-sm md:text-1xl lg:text-2xl text-center">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
          </div>
        
        
          <div class="relative flex flex-col w-4/5 md:w-[50%] lg:w-[35%] h-3/5 md:h-4/5 lg:h-4/5 bg-white items-center place-self-center md:place-self-center rounded-2xl md:rounded-2xl md:left-40 lg:left-48 mt-8 md:mt-16 lg:mt-20 ">

            <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute self-start left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">   
            <p class="flex flex-col items-center font-roboto font-bold text-lg md:text-2xl lg:text-3xl text-neutral-500 mt-3 md:mt-4">Welcome !
            <p class="flex flex-col font-roboto items-center font-bold text-sm md:text-sm lg:text-lg text-neutral-500 mt-4 md:mt-6">Scan your QR Code</p></p>
             
            <div class=" absolute items-center place-self-start left-2 md:left-6 lg:left-8 top-56 md:top-60 lg:top-60 space-y-1 md:space-y-2 lg:space-y-3">

                {{-- FRONT CAMERA BUTTON --}}
                <button class="flex place-self-start w-4 h-4 md:w-5 md:h-5 lg:w-7 lg:h-7 hover:w-8 hover:h-8 cursor-pointer">
                    <img id="front_camera" name="front_camera" src={{asset('images/login/front_camera.png')}} alt=""  >
                </button>
        
                {{-- BACK CAMERA BUTTON --}}
                <button class="flex place-self-start w-4 h-4 md:w-5 md:h-5 lg:w-7 lg:h-7 hover:w-8 hover:h-8 cursor-pointer">
                    <img name="back_camera" id="back_camera" src={{asset('images/login/back_camera.png')}} alt="" >
                </button>
            </div>
            
            <div id="camera-placeholder"  class="flex flex-col  items-center w-3/4 md:w-[70%] lg:w-[70%] h-[70%] md:h-[50%] lg:h-[50%] bg-[#d9d9d9]  rounded-xl mt-5 ">          
            </div>  
                
            <form action="/login/camera/process" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form" id="qrcode_form" name="qrcode_form" style="padding: 10px;">
                @csrf 
                    <input type="text" placeholder="Enter encrypted qrcode" id="qrcode" name="qrcode" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" style="display: none;" required="">
                </form> 
  
                       
            <div class="flex flex-row items-center ">

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
            
            <p class="flex flex-row text-[#919191] font-bold font-roboto text-[10px] md:text-[13px] justify-self-center mt-8 md:mt-24 mb-2 ">Don't have an account? &nbsp;<a href="/register/user" class="flex flex-row font-roboto text-blue-500 hover:text-blue-700 text-[10px] md:text-[13px] justify-self-center underline">Register here</a></p>

        </div>
      
        <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute lg:bottom-0 lg:right-4 md:bottom-8 md:right-0 place-self-end md:w-[180px] lg:w-[380px] md:h-[170px] lg:h-[370px] md:block">


    </div>


    <script>
        console.log(Html5QrcodeScanner);
    </script>

</body>

</html>