<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="  flex h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] flex-col items-center ">
        <p class="flex flex-col text-2xl md:text-[30px] font-semibold md:font-bold justify-self-center font-roboto text-[#5ececd] mt-4 md:mt-8 text-shadow ">ENHANCED MED-BOT</p>
        <i class="flex flex-col font-roboto text-white mt-0 md:mt-1 justify-self-center text-sm md:text-md mb-3 md:mb-4">“Your Ultimate ALL-in-ONE Healthcare Buddy”</i>
        <div class="flex flex-col md:flex-col w-4/5 md:w-2/3 h-96 md:h-4/5 bg-white items-center rounded-2xl md:rounded-2xl lg:w-1/2">
            <img src="{{asset('images/home.svg')}}" class=" flex flex-row place-self-start ml-6 md:ml-7 w-3 md:w-6 h-3 md:h-6 mt-2 md:mt-5">  
            <p class="flex flex-col items-center font-roboto font-bold text-lg md:text-2xl text-neutral-500 -mt-4 md:-mt-6">Welcome !
            <p class="flex flex-col font-roboto items-center font-bold text-sm md:text-lg  text-neutral-500 mt-4 md:mt-8">Scan your QR Code</p></p>
            <div class="flex flex-col md:flex-col items-center w-3/4 md:w-4/6 h-[210px] md:h-5/6 bg-[#d9d9d9]  rounded-xl mt-5 md:mt-5  "></div>    
            <div class="flex flex-row items-center place-self-center mt-2 md:mt-4">
                <button class="flex justify-items-center bg-[#e8def8]  hover:bg-[#5B86E5] h-5 md:h-6 w-19 md:w-20 border-slate-400 border-[1px] rounded-s-full md:rounded-s-full font-roboto text-[10px] md:text-[12px] font-light ">
                    <div class="flex flex-row" >
                        <img src="{{asset('images/select.svg')}}" class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-3 w-3 md:w-3 ">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto md:mt-0.5">
                        Camera</div>    
                    </div>
                </button>
                <button class="flex justify-items-center h-5 md:h-6 w-19 md:w-20 bg-white hover:bg-[#5B86E5] border-slate-400 border-[1px] rounded-e-full md:rounded-e-ful font-roboto text-[10px] md:text-[12px] font-light">
                    <div class="flex flex-row">
                        <img src="{{asset('images/select.svg')}}" class="flex mr-2 md:mr-2 ml-1 md:ml-1 my-auto md:my-1 h-2 md:h-4 w-3 md:w-3">
                    <div class="flex flex-row mr-2 md:mr-2 my-auto md:my-auto md:mt-0.5">
                        Upload</div>   
                    </div>
                </button>
            </div>
            
            <p class="flex flex-row text-[#919191] font-bold font-roboto text-[10px] md:text-[12px] justify-self-center mt-8 md:mt-20 md:mb-2">Don't have an account? &nbsp;<u href="#" class="flex flex-row font-roboto text-blue-400 hover:text-[#5b86e5] text-[10px] md:text-[12px] justify-self-center">Register here</u></p>
            <img src="{{asset('images/model.png')}}" class="hidden flex absolute flex-col place-self-end w-[65px] md:w-[120px] h-[80px] md:h-[150px] translate-x-[0px] md:-translate-x-[30px] translate-y-[277px] md:translate-y-[280px] md:block ">

        </div>
      


    </div>


</body>

</html>