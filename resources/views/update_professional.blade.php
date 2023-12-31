<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update My Information</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" relative flex w-full h-fit lg:h-screen bg-gradient-to-r from-[#5B86E5] to-[#305AB9]">
        <div class="flex flex-col-reverse px-5 py-5 mx-auto md:flex-row md:space-x-10 z-10">
            <div class="flex flex-col justify-center items-center h-full">
                <p class=" font-roboto font-normal text-2xl text-white text-center mt-5 md:mt-0 md:text-3xl z-10">Your Ultimate ALL-in-ONE Healthcare Buddy</p>
                <img src="{{asset('images/side view 2.png')}}" alt="" class="h-1/2 w-1/2 md:h-[25%] md:h-[20%] md:w-[60%] lg:h-[30%] lg:w-[60%] relative z-10">
                <p class=" font-roboto font-normal text-lg text-white text-center md:text-xl z-10">Monitor your vital signs using the Enhanced Med-Bot</p>

                <div class="absolute justify-center">
                    <img src="{{asset('images/register/heartbeat.svg')}}" alt="" class="w-full h-full md:w-full md:h-full lg:w-full lg:h-full">
                </div>
            </div>

            <div class="w-full h-fit justify-center self-center flex flex-col bg-white rounded-3xl border-black px-4 py-4 z-10">
                <div class="flex flex-col px-4 py-2 md:flex-row">
                    <div class="flex justify-end md:hidden">
                        <a href="/">
                            <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                        </a>
                    </div>
                    <div class="w-full flex-col md:flex-row justify-between space-y-6 md:space-y-4">
                        <div class="w-full flex flex-row space-x-5 items-center">
                            <a href="/" >
                                <img src="{{ asset('images/LOGO.png') }}" alt="" class="h-12 w-12">
                            </a>
                            <p class="font-roboto font-bold text-base text-[#5ECECD] text-shadow text-center">ENHANCED MED-BOT</p>
                        </div>
                        <p class=" font-roboto font-light text-lg lg:text-2xl text-neutral-400 text-center md:pl-12">Profile Information</p>   
                    </div>
                </div>

                
                <form action="/update/professional/process" method="POST" enctype="multipart/form-data" id="form">
                    @csrf
                    <input type="text" class="hidden" value="{{$user->id}}" name="id">
                    <div class="grid grid-cols-1 gap-4 items-start mt-4 md:grid-cols-2 lg:grid-cols-3">
                        
                        <div class="grid flex flex-col justify-center items-center md:col-span-2 lg:row-span-5 lg:col-span-1"> 
                            <img src="{{ $user->profile != null ? asset('storage/' . $user->profile) : asset('images/dashboard/profile.png')}}" alt="" id="profile-placeholder" class="h-20 w-20 mx-auto rounded-full cursor-pointer hover:brightness-50">
                            <p class="font-roboto text-gray-700 text-sm font-normal mt-2">Profile Picture</p>
                            <input type="file" class="hidden" id="profile" name="profile" accept="image/.png,image/.jpeg,image/.jpg">
                        </div> 

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="firstname">First Name</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="First Name" name="first_name" value="{{ $user->first_name }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="lastname">Last Name</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="last_name" id="lastname" type="text" placeholder="Last Name" value="{{ $user->last_name }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="suffix">Suffix</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="suffix" type="text" placeholder="Suffix" name="suffix" value="{{ $user->suffix }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="honorific">Honorific</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="honorific" type="text" placeholder="Honorific" name="honorific" value="{{ $user->honorific }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="sex">Sex</label>
                            <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sex" name="sex" value="{{ $user->sex }}">
                                    <option disabled selected hidden class="text-gray-400" value="null">Select an option</option>
                                    <option class="text-gray-400" value="male" @if($user->sex === 'male') selected @endif>Male</option>
                                    <option class="text-gray-400" value="female" @if($user->sex === 'female') selected @endif>Female</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                </div>
                            </div>
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="birthday">Date of birth (MM/DD/YY)</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="birthday" type="date" placeholder="Select a date" name="birthday" value="{{ $user->birthday }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="municipality">Municipality</label>
                            <div class="relative">
                            <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="municipality" name="municipality" value="{{ $user->municipality }}">
                                    <option disabled selected hidden value="null">Select a Municipality</option>
                                    <option value="Boac" @if($user->municipality === 'Boac') selected @endif>Boac</option>
                                    <option value="Buenavista" @if($user->municipality === 'Buenavista') selected @endif>Buenavista</option>
                                    <option value="Gasan" @if($user->municipality === 'Gasan') selected @endif>Gasan</option>
                                    <option value="Mogpog" @if($user->municipality === 'Mogpog') selected @endif>Mogpog</option>
                                    <option value="Sta. Cruz" @if($user->municipality === 'Sta. Cruz') selected @endif>Santa Cruz</option>
                                    <option value="Torrijos" @if($user->municipality === 'Torrijos') selected @endif>Torrijos</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                </div>
                            </div>
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="barangay">Barangay</label>
                            <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="barangay" name="barangay">
                                    <option disabled selected hidden value="">Select a barangay</option>
                                    @foreach ($previousBarangays as $barangay)
                                        <option value="{{ $barangay }}" @if ($barangay === $user->barangay) selected @endif>{{ $barangay }}</option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                </div>
                            </div>
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="cn">Contact Number</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact_number" type="text" placeholder="Contact Number" name="contact_number" value="{{ $user->contact_number }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="email">Email</label>
                            <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="grid flex flex-col items-start space-y-0.5 lg:col-start-2">
                            <label class=" text-gray-700 text-sm font-normal" for="ln">License Number</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="license" type="text" placeholder="License Number" name="license"  value="{{ $user->license }}">
                        </div>
                        <div class="grid"></div>
                            <div class="grid"></div>
                        
                            <div class="grid flex flex-col items-start space-y-2">
                                <div class="relative">
                                    <div class="flex flex-row space-x-4">
                                        <label class=" text-gray-700 text-sm font-normal" for="question">Security Questions</label>
                                        <p class="text-red-600 text-xs font-light">*Choose only one</p>
                                    </div>  
                                    <select class="self-start shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="question" name="question" value="{{ $user->question }}">
                                        <option value="father_name" @if($user->question === 'father_name') selected @endif>What is your Father's first name?</option>
                                        <option value="pet_name" @if($user->question === 'pet_name') selected @endif>What is the name of your first pet?</option>
                                        <option value="school_name"  @if($user->question === 'school_name') selected @endif>What was the name of your school when you were in elementary school?</option>
                                    </select>
                                    <div class="absolute inset-y-10 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>    
                            </div>
                            <div class="grid flex flex-col items-start">
                                <label class=" text-gray-700 text-sm font-normal" for="answer">Answer</label>
                                <input class=" shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your answer" type="text" id="answer" name="answer" value="{{ $user->answer }}">
                            </div>                          
                           
                    </div>
                </form>

                <div class="flex justify-center items-center my-2 md:my-0 py-4">
                    <button id="update-button" type="submit" class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Update</button>
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

    <script src="{{ asset('/js/barangay.js') }}"></script>
    <script src="{{ asset('/js/update_professional.js') }}"></script>
    <script src="{{ asset('/js/profile_selector.js') }}"></script>

    <script>
        var previousMunicipality = {{Js::from($user->municipality)}};
        var previousBarangay = {{Js::from($user->barangay)}};
        municipalityDropdown.value = previousMunicipality;
        changeBarangayOptions();
        barangayDropdown.value = previousBarangay;

    </script>
</body>
</html>