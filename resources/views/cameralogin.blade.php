<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="flex h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] flex-col items-center px-4">
        <p class="flex flex-col text-2xl md:text-4xl font-semibold md:font-bold justify-self-center font-roboto text-[#5ececd] mt-4 md:mt-5 text-shadow text-center">ENHANCED MED-BOT</p>
        <i class="flex flex-col font-roboto text-white mt-0 md:mt-1 justify-self-center text-sm md:text-lg mb-3 md:mb-4 text-center">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        <div class="relative flex flex-col w-4/5 md:w-2/5 h-96 md:h-4/5 bg-white items-center rounded-2xl md:rounded-2xl lg:w-[35%]">
            <img src="{{asset('images/login/home.svg')}}" alt=" " class="absolute self-start left-5 top-5 w-3 md:w-6 h-3 md:h-6 md:top-6">  
            <p class="flex flex-col items-center font-roboto font-bold text-lg md:text-3xl text-neutral-500 mt-3 md:mt-4">Welcome !
            <p class="flex flex-col font-roboto items-center font-bold text-sm md:text-lg  text-neutral-500 mt-4 md:mt-6">Scan your QR Code</p></p>
            <div class="flex items-center w-3/4 md:w-[65%] h-[70%] md:h-[50%]  bg-[#d9d9d9]  rounded-xl mt-5 "></div>    
            <div class="flex flex-row items-center place-self-center mt-2 md:mt-4">
                <button class="flex justify-items-center bg-[#e8def8]  hover:bg-blue-300 h-5 md:h-6 w-19 md:w-15 border-slate-400 border-[1px] rounded-s-full md:rounded-s-full font-roboto text-[10px] md:text-[12px] font-light ">
                    <div class="flex flex-row" >
                        <img src="{{asset('images/login/select.svg')}}" alt=" " class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-3 w-3 md:w-3 ">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto mt-1">
                        Camera</div>    
                    </div>
                </button>
                <button class="flex justify-items-center h-5 md:h-6 w-19 md:w-15 bg-white hover:bg-blue-300 border-slate-400 border-[1px] rounded-e-full md:rounded-e-ful font-roboto text-[10px] md:text-[12px] font-light">
                    <div class="flex flex-row">
                        <img src="{{asset('images/login/select.svg')}}" aly=" "  class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-3 w-3 md:w-3">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto mt-1">
                        Upload</div>   
                    </div>
                </button>
            </div>
            
            <p class="flex flex-row text-[#919191] font-bold font-roboto text-[10px] md:text-[13px] justify-self-center mt-8 md:mt-24 mb-2 ">Don't have an account? &nbsp;<u href="#" class="flex flex-row font-roboto text-blue-500 hover:text-blue-700 text-[10px] md:text-[13px] justify-self-center">Register here</u></p>
            <img src="{{asset('images/login/modelleftsideview.png')}}" alt=" " class="hidden absolute -bottom-4 -right-32 self-start w-[240px] h-[250px] md:block">



        </div>
      


    </div>


</body>

</html>