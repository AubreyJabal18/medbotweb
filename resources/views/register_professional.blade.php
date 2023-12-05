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
                <img src="{{asset('images/side view 2.png')}}" alt="" class="h-1/2 w-1/2  md:h-[25%] lg:h-[30%] lg:w-[60%] xl:h-[40%] xl:w-[60%] relative z-10">
                <p class=" font-roboto font-normal text-lg text-white text-center md:text-xl z-10">Monitor your vital signs using the Enhanced Med-Bot</p>

                <div class="absolute justify-center">
                    <img src="{{asset('images/register/heartbeat.svg')}}" alt="" class="w-full h-full md:w-full md:h-full lg:w-full lg:h-full">
                </div>
            </div>

            <div class="w-full h-fit flex flex-col bg-white rounded-3xl border-black px-4 py-4 z-10">
                <div class="flex flex-col px-4 py-2 md:flex-row">
                    <div class="flex justify-end md:hidden">
                        <a href="/">
                            <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                        </a>
                    </div>
                    <div class="w-full flex flex-row justify-between">
                        <div class="w-full flex flex-row space-x-5 items-center">
                            <img src="{{asset('images/LOGO.png')}}" alt="" class="h-12 w-12">
                            <p class="font-roboto font-bold text-base text-[#5ECECD] text-shadow text-center">ENHANCED MED-BOT</p>
                        </div>   
                        <div class="hidden justify-end items-center md:flex">
                            <a href="/">
                                <img src="{{asset('images/register/home.svg')}}" alt="" class="h-6 w-6">
                            </a>
                        </div>  
                    </div>
                </div>

                <div class="w-full flex flex-col my-4 md:px-4">
                    <p class="font-roboto font-bold text-base text-black ">Create an account</p>
                    <p class="font-roboto font-normal text-base text-black ">Register as User? <a href="/register/user" class="text-[#5B86E5]">Click here</a></p>
                </div>
                <form action="/register/professional/process" method="POST" enctype="multipart/form-data" id="form">
                    <div class="grid grid-cols-1 gap-4 items-start mt-4 md:grid-cols-2 lg:grid-cols-3">
                        
                        <div class="grid flex flex-col justify-center items-center md:col-span-2 lg:row-span-5 lg:col-span-1"> 
                            <img src="{{asset('images/register/Profile pic.svg')}}" alt="" id="profile-placeholder" class="h-20 w-20 mx-auto rounded-full cursor-pointer hover:brightness-50">
                            <p class="font-roboto text-gray-700 text-sm font-normal mt-2">Profile Picture</p>
                            <input type="file" class="hidden" id="profile" name="profile" accept="image/.png,image/.jpeg,image/.jpg">
                        </div> 
    
                            @csrf
                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="firstname">First Name</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="lastname">Last Name</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="last_name" id="lastname" type="text" placeholder="Last Name" value="{{old('last_name')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="suffix">Suffix</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="suffix" type="text" placeholder="Suffix" name="suffix" value="{{old('suffix')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="honorific">Honorific</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="honorific" type="text" placeholder="Honorific" name="honorific" value="{{old('honorific')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="sex">Sex</label>
                                <div class="relative">
                                    <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sex" name="sex" value="{{old('sex')}}">
                                        <option disabled selected hidden class="text-gray-400" value="null">Select an option</option>
                                        <option class="text-gray-400" value="male" @if(old('sex') === 'male') selected @endif>Male</option>
                                        <option class="text-gray-400" value="female" @if(old('sex') === 'female') selected @endif>Female</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="birthday">Date of birth (MM/DD/YY)</label>
                                <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="birthday" type="date" placeholder="Select a date" name="birthday" value="{{old('birthday')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="municipality">Municipality</label>
                                <div class="relative">
                                    <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="municipality" name="municipality" value="{{old('municipality')}}">
                                        <option disabled selected hidden value="null">Select a Municipality</option>
                                        <option value="Boac" @if(old('municipality') === 'Boac') selected @endif>Boac</option>
                                        <option value="Buenavista"@if(old('municipality') === 'Buenavista') selected @endif>Buenavista</option>
                                        <option value="Gasan" @if(old('municipality') === 'Gasan') selected @endif >Gasan</option>
                                        <option value="Mogpog" @if(old('municipality') === 'Mogpog') selected @endif>Mogpog</option>
                                        <option value="Sta. Cruz" @if(old('municipality') === 'Sta. Cruz') selected @endif>Santa Cruz</option>
                                        <option value="Torrijos"@if(old('municipality') === 'Torrijos') selected @endif>Torrijos</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="barangay">Barangay</label>
                                <div class="relative">
                                <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="barangay" name="barangay" value="{{old('barangay')}}">
                                        <option disabled selected hidden value="null">Select a barangay</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="cn">Contact Number</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact_number" type="text" placeholder="Contact Number" name="contact_number" value="{{old('contact_number')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5">
                                <label class=" text-gray-700 text-sm font-normal" for="email">Email</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email" name="email" value="{{old('email')}}">
                            </div>

                            <div class="grid flex flex-col items-start space-y-0.5 lg:col-start-2">
                                <label class=" text-gray-700 text-sm font-normal" for="ln">License Number</label>
                                <input class="shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="license" type="text" placeholder="License Number" name="license"  value="{{old('license')}}">
                            </div>

                            <div class="grid"></div>
                            <div class="grid"></div>
                        
                            <div class="grid flex flex-col items-start space-y-2">
                                <div class="relative">
                                    <div class="flex flex-row space-x-4">
                                        <label class=" text-gray-700 text-sm font-normal" for="question">Security Questions</label>
                                        <p class="text-red-600 text-xs font-light">*Choose only one</p>
                                    </div>  
                                    <select class="self-start shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  id="question" name="question" value="{{ old('question')}}">
                                        <option value="father_name">What is your Father's first name?</option>
                                        <option value="pet_name">What is the name of your first pet?</option>
                                        <option value="school_name" >What was the name of your school when you were in elementary school?</option>
                                    </select>
                                    <div class="absolute inset-y-10 right-0 flex items-center pr-3 pointer-events-none">
                                        <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                    </div>
                                </div>    
                            </div>
                            <div class="grid flex flex-col items-start">
                                <label class=" text-gray-700 text-sm font-normal" for="answer">Answer</label>
                                <input class=" shadow appearance-none border rounded h-fit w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your answer" type="text" id="answer" name="answer" value="{{ old('answer')}}">
                            </div>                          
                           
                        </form>
                    </div>

                <div class="flex justify-center items-center my-7 md:items-center md:my-10">
                    <input type="checkbox" class="checked:bg-black w-4 h-4" id="terms">
                    <span class="ml-2 text-sm text-black text-center">
                        I agree to the <a href="#" class="text-[#7A9DEA] underline underline-offset-2" onclick="openTermsPopup()">Terms and Condition</a>
                        and <a href="#" class="text-[#7A9DEA] underline underline-offset-2" onclick="openPrivacyPopup()">Privacy Notice</a>
                    </span>
                </div>
                
                <!-- Terms Popup -->
                <div class="fixed inset-0 flex items-center justify-center hidden" id="termsPopup">
                    <div class="bg-black bg-opacity-50 absolute inset-0"></div>
                    <div class="bg-white w-full md:max-w-2xl max-w-sm rounded shadow-lg p-8 relative z-10 overflow-y-auto max-h-[80vh]">
                        <span id="closeButtonTerms" class="text-gray-700 text-2xl font-bold cursor-pointer absolute top-2 right-4" onclick="closeTermsPopup()">&times;</span>
                        <h2 class="text-2xl text-center font-bold mb-4">TERMS AND CONDITIONS</h2>
                        <p id="termsContent" class="ml-4 text-justify">
                            <span class="ml-4">Welcome to Med-bot, the innovative Internet of Things (IoT) monitoring system designed to enhance healthcare through continuous blood vital signs monitoring. Before using our platform, please carefully read and understand the following terms and conditions. These terms outline the rights, responsibilities, and expectations for both healthcare professionals and patients utilizing the Med-bot system.<br></span>
                                        
                            <br>1. Patients<br>

                            <span class="ml-4">1.1. Consent to Monitoring</span><br>
                            <span class="ml-8">1.1.1 Patients consent to the continuous monitoring of their blood vital signs through the Med-bot IoT system.</span><br>
                            
                            <br><span class="ml-4">1.2. Data Usage</span><br>
                            <span class="ml-8">1.2.1 Patient data collected by the system will be used solely for the purpose of monitoring and improving healthcare outcomes.</span><br>
                            
                            <br><span class="ml-4">1.3 Privacy and Confidentiality</span><br>
                            <span class="ml-8">1.3.1 The system ensures the privacy and confidentiality of patient data, and it will not be shared with third parties without explicit consent, except as required by law.</span><br>
                            
                            <br><span class="ml-4">1.4 System Usage</span><br>
                            <span class="ml-8">1.4.1 Patients agree to use the system responsibly and report any concerns or issues with the functionality promptly.</span><br>
                            
                            <br><span class="ml-4">1.5 Emergency Situations</span><br>
                            <span class="ml-8">1.5.1 In emergency situations, healthcare professionals may access patient data to provide timely and appropriate medical assistance.</span><br>
                            <br>
                            <span class="ml-4">By accessing and using Med-bot, you acknowledge your acceptance of these terms. If you do not agree with any part of these terms, we advise against using the platform.<br></span>
                            
                        </p>
                        <button id="closeButtonTerms" type="button" class="block bg-blue-500 text-white px-4 py-2 mt-4 rounded cursor-pointer mx-auto " onclick="closeTermsPopup()">Agree</button>
                    </div>
                </div>

                <!-- Privacy Popup -->
                <div class="fixed inset-0 flex items-center justify-center hidden" id="privacyPopup">
                    <div class="bg-black bg-opacity-50 absolute inset-0"></div>
                    <div class="bg-white w-full md:max-w-2xl max-w-sm rounded shadow-lg p-8 relative z-10 overflow-y-auto max-h-[80vh]">
                        <span id="closeButtonPrivacy" class="text-gray-700 text-2xl font-bold cursor-pointer absolute top-2 right-4" onclick="closePrivacyPopup()">&times;</span>
                        <h2 class="text-2xl font-bold mb-4">Privacy Notice</h2>
                        <p id="privacyContent" class="ml-4 text-justify">
                            <span class="ml-4">Welcome to Med-bot's Privacy Notice. This notice outlines how we collect, use, disclose, and safeguard your personal information when you use our Internet of Things (IoT) monitoring system. We are committed to protecting your privacy and ensuring the confidentiality of your data. </span><br>
                        
                            <br>**Information We Collect:**<br>
                            <span class="ml-4">We collect and process various types of information, including but not limited to:</span><br>
                            
                            <span class="ml-4">- Personal information provided by users during account registration.</span><br>
                            <span class="ml-4">- Health-related data obtained through continuous monitoring using the Med-bot IoT system.</span><br>
                            <span class="ml-4">- Usage information, such as system interactions and preferences.</span><br>
                        
                           <br> **How We Use Your Information:**<br>
                           <span class="ml-4">We use the collected information for the following purposes:</span><br>
                            
                            <span class="ml-4">- Providing and improving our healthcare services.</span><br>
                            <span class="ml-4">- Customizing and enhancing the user experience.</span><br>
                            <span class="ml-4">- Ensuring the security and integrity of the Med-bot system.</span><br>
                            <span class="ml-4">- Complying with legal obligations and regulations.</span><br>
                        
                            <br>**Information Sharing:**<br>
                            <span class="ml-4">We do not share your personal information with third parties without your explicit consent, except as required by law or to provide our healthcare services effectively.<br>
                        
                            <br>**Data Security:**<br>
                            <span class="ml-4">We employ industry-standard security measures to protect your information from unauthorized access, disclosure, alteration, and destruction.<br>
                        
                            <br>**Your Choices:**<br>
                            <span class="ml-4">You have the right to review, update, and delete your personal information. You can manage your privacy preferences through your account settings.<br>
                        
                            <br>**Contact Us:**<br>
                            <span class="ml-4">If you have any questions or concerns about our Privacy Notice or data practices, please [contact us](#) for assistance.<br>
                        
                            <br><span class="ml-4">By using Med-bot, you acknowledge and agree to the terms outlined in this Privacy Notice. If you disagree with any part of this notice, we recommend refraining from using our platform.
                        </p>
                        <button id="closeButtonPrivacy" type="button" class="block bg-blue-500 text-white px-4 py-2 mt-4 rounded cursor-pointer mx-auto" onclick="closePrivacyPopup()">Agree</button>
                    </div>
                </div>

                <div class="flex justify-center items-center my-2 md:my-0">
                    <button id="submit-button" type="button" class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Register</button>
                </div>

                <div class="flex justify-center items-center mt-2 md:my-7">
                    <p class="font-roboto text-sm font-medium text-[#2D3748] md:text-base">Already have an account? <a href="/login/upload" class="text-[#5B86E5] underline underline-offset-4">Login here</a></p>
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
    <script src="{{ asset('/js/validate_professional_registration.js') }}"></script>
    <script src="{{ asset('/js/profile_selector.js') }}"></script>
    <script src="{{ asset('/js/terms_condition.js') }}"></script>

    <script>
        var oldMunicipality = {{Js::from(old('municipality'))}};
        var oldBarangay = {{Js::from(old('barangay'))}};
        municipalityDropdown.value = oldMunicipality;
        changeBarangayOptions()
        barangayDropdown.value = oldBarangay;
    </script>
    
</body>
</html>