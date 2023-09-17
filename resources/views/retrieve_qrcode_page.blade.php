<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative flex w-full h-fit md:h-screen bg-gradient-to-r from-[#5DE0E6] to-[#004AAD] ">
        <div class="flex flex-col-reverse px-5 lg:px-28 py-5 mx-auto md:flex-row md:space-x-10 z-10">
            <div class="flex flex-col justify-center items-center h-full">
                <p class=" font-roboto font-normal text-2xl text-white text-center mt-5 md:mt-0 md:text-3xl z-10">Your Ultimate ALL-in-ONE Healthcare Buddy</p>
                <img src="{{asset('images/register/model_right_sideview.png')}}" alt="" class="h-1/2 w-1/2  md:h-[25%] md:h-[20%] lg:h-[40%] lg:w-[50%] relative z-10">
                <p class=" font-roboto font-normal text-lg text-white text-center md:text-xl z-10">Monitor your vital signs using the Enhanced Med-Bot</p>
            </div>

            <div class="w-full h-fit lg:w-[40%] lg:h-[90%] flex flex-col bg-white rounded-3xl border-black mt-8 px-4 py-4 z-10">
                <div class="flex flex-col px-4 py-2 md:flex-row">
                    <div class="flex justify-end hidden">
                        <a href="/">
                            <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                        </a>
                    </div>
                    <div class="w-full flex flex-row justify-between">
                        <div class="w-full flex flex-row space-x-2 md:space-x-5 items-center">
                            <img src="{{asset('images/register/logo2.png')}}" alt="" class="h-12 w-12 lg:h-16 lg:w-16">
                            <p class="font-roboto font-bold text-base md:text-xl text-[#5ECECD] text-shadow text-center">ENHANCED MED-BOT</p>
                        </div>   
                        <div class="hidden justify-end items-center md:flex">
                            <a href="/">
                                <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                            </a>
                        </div>  
                    </div>
                </div>

                <div class="w-full flex flex-col my-4 md:px-4">
                    <p class="font-roboto font-light text-xs md:text-base text-black text-justify lg:text-center">Kindly provide the following information in order to facilitate the retrieval of your QR Code.</p>
                    {{-- <p class="font-roboto font-normal text-base text-black ">Register as Professional? <a href="/register/professional" class="text-[#5B86E5]">Click here</a></p> --}}
                </div>

                <form action="/check_security_question" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <div class="flex space-x-2 flex-row items-center justify-center mt-4 "> 

                                                    {{-- <div class="grid flex flex-col items-start space-y-0.5">
                                                        <label class=" text-gray-700 text-sm font-normal" for="cn">Contact Number</label>
                                                        <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact_number" type="text" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">
                                                    </div>
                                --}}
                        <div class="flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="id_number">User ID</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id_number" type="text" placeholder="Enter your User ID" name="id_number">
                        </div>
                    </div> 
                        {{--                
                                                <div class="flex mt-6">
                                                    <button type="button" id="submit-button" class="flex items-center justify-center border rounded-full w-20 h-6 bg-[#47B0E1] font-roboto font-medium text-base text-white ">Submit</button>
                                                </div> --}}

                        
                    <div class="flex flex-col items-center space-y-2 w-full  md:w-[60%] mt-10 md:ml-[20%]">
                        <div class="relative">
                            <div class="flex flex-row space-x-4">
                                <label class=" text-gray-700 text-sm font-normal" for="question">Security Questions</label>
                                <p class="text-red-600 text-xs font-light">*Choose only one</p>
                            </div>  
                            <select class="self-start shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="question" name="question">
                                <option value="father_name">What is your Father's first name?</option>
                                <option value="pet_name">What is the name of your first pet?</option>
                                <option value="school_name" >What was the name of your school when you were in elementary school?</option>
                            </select>
                            <div class="absolute inset-y-5 lg:inset-y-10 right-0 flex items-center pr-3 lg:pr-4 pointer-events-none">
                                <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="hidden lg:block h-5 w-5 text-gray-700">
                            </div>
                        </div>    
                    </div>

                    <div class=" flex flex-col items-start w-full md:w-[60%] mt-4 md:ml-[20%]">
                        <label class=" text-gray-700 text-sm font-normal" for="answer">Answer</label>
                        <input class=" shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your answer" type="text" id="answer" name="answer">
                    </div>   
                    <div class="flex justify-center items-center mt-[20%]">
                        <button type="button" id="retrieve-button" class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Retrieve</button>
                    </div>
                </form>
                
                {{-- <form action="/register/user/process" method="POST" enctype="multipart/form-data" id="retrieve-qrcode-form" >
                    @csrf

                    <p class="flex font-light text-sm md:text-base justify-center mt-[20%]">Enter OTP</p>
                    <div class="flex flex-row items-center space-x-3 mt-8 justify-center">
                        <input type="text" id="digit-1" name="digit-1" placeholder="-" class="shadow rounded-2xl h-[60%] w-[10%] py-2 px-3 text-gray-700 text-center"/>
                        <input type="text" id="digit-2" name="digit-2" placeholder="-" class="shadow rounded-2xl h-[60%] w-[10%] py-2 px-3 text-gray-700 text-center"/>
                        <input type="text" id="digit-3" name="digit-3" placeholder="-" class="shadow rounded-2xl h-[60%] w-[10%] py-2 px-3 text-gray-700 text-center"/>
                        <input type="text" id="digit-4" name="digit-4" placeholder="-" class="shadow rounded-2xl h-[60%] w-[10%] py-2 px-3 text-gray-700 text-center"/>
                       
                    </div>
                    <div class="flex justify-center items-center mt-[20%]">
                        <button type="button" id="retrieve-button" class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Retrieve</button>
                    </div>
                </form> --}}
            
                <p class="flex mt-8 font-roboto text-sm font-medium text-[#2D3748] text-center md:text-base justify-center">Do you want to Login? &nbsp;<span><a href="/login/upload" class="font-roboto text-blue-500 hover:text-blue-700 text-sm md:text-base justify-self-center underline">Login here</a></span></p>
            </div>
            
        </div>

    </div>

    <script src="{{ asset('/js/check_security_question.js') }}"></script> 

</body>
</html>