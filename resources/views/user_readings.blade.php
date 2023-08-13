<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Readings</title>
	@vite('resources/css/app.css')

	<link href="{{asset('/css/mermaid.min.css')}}" rel="stylesheet"/>
</head>
<body>
	@if(Session::has('id'))
        <script>
            const id = {{session()->get('id')}};
            window.open('/get/qrcode?id='+id, '_self');
        </script>
    @endif

	<div class="flex flex-col h-fit md:h-full xl:h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9]">
		
		<div class="flex flex-row justify-between items-center px-4 py-3 md:px- mb-10">
			<div class="flex flex-row space-x-4 items-center">
				<img src={{asset('images/dashboard/logo.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
				<p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
			</div>
			<div class="flex flex-row space-x-4 items-center justify-end">
				<p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
				<img src="{{asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 hover:brightness-75">
			</div>
			
			<x-menu_user :user="$user"/>
		</div>

		<div class="flex flex-col space-y-2 md:space-y-0 md:flex-row items-center justify-center md:space-x-5 relative">
			
			<div class="flex items-center">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-[600px] xl:h-40 left-0 top-56 xl:top-2 md:hidden xl:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-auto xl:h-40 left-0 hidden md:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-[640px] xl:h-40 right-0 top-56 xl:top-2 md:hidden xl:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-auto xl:h-40 right-0 hidden md:block">
			</div>

			<div class="flex flex-row items-center justify-center space-x-2 md:space-x-5">
				<div class="flex flex-col relative items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200 ">
					<p class="flex font-roboto font-normal text-black text-sm xl:text-xl md:text-base">Weekly Count</p>
					
					<div class="flex flex-row w-full h-fit items-center justify-evenly">
						<img src="{{asset('images/dashboard/design_patient.png')}}" alt=""  class="w-8 lg:w-24 h-8 lg:h-24">
						<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Week">{{$weeklyCount}}</p>
					</div>
					<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">	
				</div>

				<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200 ">
					<p class="flex font-roboto font-normal text-black text-sm md:text-base xl:text-xl">Monthly Count</p>
					
					<div class="flex flex-row w-full h-fit items-center justify-evenly">
						<img src="{{asset('images/dashboard/design_patient.png')}}" alt="" class="w-8 lg:w-24 h-8 lg:h-24">
						<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Month">{{$monthlyCount}}</p>
					</div> 
					<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">   
				</div>

			</div>

			<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200 ">
            	<p class="flex font-roboto font-normal text-black text-sm md:text-base xl:text-xl">Yearly Count</p>
				
				<div class="flex flex-row w-full h-fit items-center justify-evenly">
					<img src="{{asset('images/dashboard/design_patient.png')}}" alt="" class="w-8 lg:w-24 h-8 lg:h-24">
					<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Year">{{$yearlyCount}}</p>
				</div>    
				<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">
            </div>
			
			<img src="{{asset('images/dashboard/model.png')}}" alt="" class="w-36 h-36 lg:w-44 lg:h-44 z-10">
			
		</div>


		
		<div class="flex justify-center mt-5 mb-5 md:mt-14 ">

			<div class="items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300">
				<p class="text-lg md:text-2xl font-semibold mb-2 text-white text-center">Your Vital Readings</p>
				<div id="test-table" class="w-[300px] md:w-[500px] lg:w-[900px] xl:[1000px]"></div>
			</div>
	
		</div>
		
		<div class="flex justify-end">
			<div class="flex flex-row items-center justify-center p-2 space-x-2 mt-10 mb-10 lg:mr-16 xl:mr-72 left-10 w-52 h-20 border border-white bg-[#5EDAD5] rounded-xl shadow-lg shadow-black">
				<img src="{{asset('images/dashboard/download.png')}}" alt="" class="w-12 h-12">
				<b class="text-roboto font-medium text-lg text-black text-center">Download Vital Readings</b>
			</div>
		</div>
		
	</div>

	<script src="{{asset('/js/gridjs.umd.js')}}"></script>
	<script src="{{asset('/js/test.js')}}"></script>
  
</body>
</html>