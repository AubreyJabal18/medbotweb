<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] flex-col items-center px-4">
        <img src={{asset('images/login/heartbeat.png')}} alt="" class="absolute place-self-start h-10 md:h-60 w:10 md:w-4/6 md:-ml-4 md:mt-72 hidden md:block">
        <img src="{{asset('images/login/e1.svg')}}" alt="" class="absolute place-self-start bottom-0 left-0 ">
        <img src="{{asset('images/login/e2.svg')}}" alt="" class="absolute place-self-start top-0 left-0 hidden md:block">
        
        <p class="flex flex-col text-2xl md:text-4xl font-semibold md:font-bold justify-self-center font-roboto text-[#5ececd] mt-5 md:mt-5 text-shadow text-center">ENHANCED MED-BOT</p>
        <i class="flex flex-col font-roboto text-white mt-0 md:mt-1 justify-self-center text-sm md:text-lg mb-3 md:mb-4 text-center">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        <div class="relative flex flex-col w-4/5 md:w-2/5 h-3/5 md:h-4/5 bg-white items-center place-self-center md:place-self-start rounded-2xl md:rounded-2xl md:mr-20 lg:w-[35%] mt-8 md:mt-4">
            <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute self-start left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">  
            <p class="flex flex-col items-center font-roboto font-bold text-lg md:text-3xl text-neutral-500 mt-3 md:mt-4">Welcome !
            <p class="flex flex-col font-roboto items-center font-bold text-sm md:text-lg  text-neutral-500 mt-4 md:mt-6">Scan your QR Code</p></p>
            <div class="flex items-center justify-center w-3/4 md:w-[65%] h-[70%] md:h-[50%] bg-white border-2 border-black rounded-xl mt-5 ">
                <img src="{{asset('images/login/upload.png')}}" alt="" class="absolute  w-20 md:w-40 h-20 md:h-40  ">
            </div>    
            <div class="flex flex-row items-center place-self-center mt-2 md:mt-4">
                <button class="flex justify-items-center bg-[#e8def8]  hover:bg-blue-300 h-5 md:h-6 w-19 md:w-15 border-slate-400 border-[1px] rounded-s-full md:rounded-s-full font-roboto text-[10px] md:text-[12px] font-light ">
                    <div class="flex flex-row" >
                        <img src="{{asset('images/login/select.svg')}}" alt=" " class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-3 w-3 md:w-3 ">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto mt-0.5 md:mt-0.5">
                        Camera</div>    
                    </div>
                </button>
                <button class="flex justify-items-center h-5 md:h-6 w-19 md:w-15 bg-white hover:bg-blue-300 border-slate-400 border-[1px] rounded-e-full md:rounded-e-ful font-roboto text-[10px] md:text-[12px] font-light">
                    <div class="flex flex-row">
                        <img src="{{asset('images/login/select.svg')}}" aly=" "  class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-3 w-3 md:w-3">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto mt-0.5 md:mt-0.5">
                        Upload</div>   
                    </div>
                </button>
            </div>
            
            <p class="flex flex-row text-[#919191] font-bold font-roboto text-[10px] md:text-[13px] justify-self-center mt-8 md:mt-24 mb-2 ">Don't have an account? &nbsp;<u href="#"  class="flex flex-row font-roboto text-blue-500 hover:text-blue-700 text-[10px] md:text-[13px] justify-self-center">Register here</u></p>
            
        </div>
      
        <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute self-start w-[380px] h-[370px] bottom-40 left-80 place-self-left md:block">

    </div>


</body>

</html>