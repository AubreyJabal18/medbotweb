<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pro-Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" relative flex w-full h-fit bg-gradient-to-r from-[#5B86E5] to-[#305AB9]">
        <div class="flex flex-col-reverse px-5 py-5 mx-auto md:flex-row md:space-x-10 z-10">
            <div class="flex flex-col justify-center items-center h-full">
                <p class=" font-roboto font-normal text-2xl text-white text-center mt-5 md:mt-0 md:text-3xl z-10">Your Ultimate ALL-in-ONE Healthcare Buddy</p>
                <img src="{{asset('images/register/medbot-side.svg')}}" alt="" class="h-1/2 w-1/2 md:h-1/2 md:w-3/4 relative z-10">
                <p class=" font-roboto font-normal text-lg text-white text-center md:text-xl z-10">Monitor your vital signs using the Enhanced Med-Bot</p>

                <div class="absolute justify-center">
                    <img src="{{asset('images/register/heartbeat.svg')}}" alt="" class="w-full h-full md:w-full md:h-full lg:w-full lg:h-full">
                </div>
            </div>

            <div class="w-full h-fit flex flex-col bg-white rounded-3xl border-black px-4 py-4 z-10">
                <div class="flex flex-col px-4 py-2 md:flex-row">
                    <div class="flex justify-end md:hidden">
                        <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                    </div>
                    <div class="w-full flex flex-row justify-between">
                        <div class="w-full flex flex-row space-x-5 items-center">
                            <img src="{{asset('images/register/logo2.svg')}}" alt="" class="h-12 w-12">
                            <p class="font-roboto font-bold text-base text-[#5ECECD] text-shadow text-center">ENHANCED MED-BOT</p>
                        </div>   
                        <div class="hidden justify-end items-center md:flex">
                            <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                        </div>  
                    </div>
                </div>

                <div class="w-full flex flex-col my-4 md:px-4">
                    <p class="font-roboto font-bold text-base text-black ">Create an account</p>
                    <p class="font-roboto font-normal text-base text-black ">Register as Professional? <a href="#" class="text-[#5B86E5]">Click here</a></p>
                </div>
                <form action="/register/professional/process" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-1 gap-4 items-start mt-4 md:grid-cols-2 lg:grid-cols-3">
                        
                        <div class="grid flex flex-col justify-center items-center md:col-span-2 lg:row-span-5 lg:col-span-1"> 
                            <img src="{{asset('images/register/Profile pic.svg')}}" alt="" class="h-20 w-20 mx-auto">
                            <p class="font-roboto text-gray-700 text-sm font-normal">Profile Picture</p>
                        </div> 
                        
                        
                            @csrf
                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="firstname">First Name</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="First Name">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="lastname">Last Name</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Last Name">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="suffix">Suffix</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="suffix" type="text" placeholder="Suffix">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="honorrific">Honorrific</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="honorrific" type="text" placeholder="Honorrific">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="sex">Sex</label>
                                <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-400 leading-tight focus:outline-none focus:shadow-outline">
                                        <option disabled selected hidden class="text-gray-700">Select an option</option>
                                        <option class="text-gray-700" value="male">Male</option>
                                        <option class="text-gray-700" value="female">Female</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="dob">Date of birth (MM/DD/YY)</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dob" type="date" placeholder="Select a date">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="municipality">Municipality</label>
                                <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option disabled selected hidden>Select a Municipality</option>
                                        <option value="boac">Boac</option>
                                        <option value="Buenavista">Buenavista</option>
                                        <option value="gasan">Gasan</option>
                                        <option value="mogpog">Mogpog</option>
                                        <option value="santa cruz">Santa Cruz</option>
                                        <option value="torrijos">Torrijos</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="barangay">Barangay</label>
                                <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                        <option disabled selected hidden>Select a barangay</option>
                                        <option value="ihatub">Ihatub</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="cn">Contact Number</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cn" type="text" placeholder="Contact Number">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="email">Email</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5 lg:col-start-2">
                                <label class=" text-gray-700 text-sm font-normal" for="ln">License Number</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ln" type="text" placeholder="License Number">
                            </div>
                        </form>
                    </div>

                <div class="flex justify-center items-center my-7 md:items-center md:my-10">
                    <input type="checkbox" class=" checked:bg-black w-4 h-4">
                    <span class="ml-2 text-sm text-black text-center">I agree to the <a href="#" class="text-[#7A9DEA] underline underline-offset-2">Terms and Condition</a></span>
                </div>

                <div class="flex justify-center items-center my-2 md:my-0">
                    <a href="#" class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Register</a>
                </div>

                <div class="flex justify-center items-center mt-2 md:my-7">
                    <p class="font-roboto text-sm font-medium text-[#2D3748] md:text-base">Already have an account? <a href="#" class="text-[#5B86E5] underline underline-offset-4">Login here</a></p>
                </div>

            </div>
        </div>

        <div>
            <div class="absolute bottom-0 right-0">
                <img src="{{asset('images/register/Ellipse 1.svg')}}" alt="" class="">
            </div>
            <div class="absolute top-0 left-0">
                <img src="{{asset('images/register/Ellipse 2.svg')}}" alt="" class="">
            </div>
            <div class="absolute bottom-0 left-0">
                <img src="{{asset('images/register/Ellipse 3.svg')}}" alt="" class="">
            </div>
        </div>
    </div>
</body>
</html>