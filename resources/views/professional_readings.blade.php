<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Readings</title>
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
		
	<div class="flex flex-col min-h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9] ">
		
		<div class="flex flex-row justify-between items-center px-4 py-3 md:px- mb-10 z-10">
			<div class="flex flex-row space-x-4 items-center">
				<a href="/">
					<img src={{asset('images/LOGO.png')}} alt="" class="h-8 w-8 md:h-12 md:w-12">
				</a>
				<p class="font-roboto font-bold text-[#07DBDB] text-lg md:text-2xl text-shadow">ENHANCED MED-BOT</p>
			</div>
			<div class="flex flex-row space-x-4 items-center justify-end">
				<p class="hidden font-roboto font-normal text-white text-lg md:block">{{ $user->first_name }} {{ $user->last_name }} {{ $user->suffix ? $user->suffix : '' }}</p>
				<img src="{{ $user->profile != null ? asset('storage/' . $user->profile) : asset('images/dashboard/profile.png')}}" alt="" id="profile-menu" class="h-8 w-8 cursor-pointer md:h-12 md:w-12 rounded-full hover:brightness-75">
			</div>
			
			<x-menu_professional :user="$user"/>
		</div>

		<div class="flex flex-col space-y-1 mb-10 px-6 ">
			<p class="flex font-roboto font-normal text-white text-md md:text-xl lg:text-2xl " >Hello {{$user->honorific}} {{  $user->last_name}}, welcome to your Readings Page!</p>
			<p class="flex font-roboto font-normal text-white text-md md:text-xl lg:text-2xl lg:ml-6">
				Here, you can access the complete reading history of your vital sign measurements.
			</p>
		</div>

		<div class="flex flex-col space-y-2 md:space-y-0 md:flex-row items-center justify-center md:space-x-5 relative">
			
			<div class="flex items-center">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-[600px] xl:h-40 left-0 lg:left-32 xl:left-9 top-56 lg:-top-1 xl:-top-1 md:hidden lg:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-auto xl:h-40 left-0 hidden md:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-[640px] xl:h-40 right-0 lg:right-32 xl:right-4 top-56 lg:-top-1 xl:-top-1 md:hidden lg:block">
				<img src="{{asset('images/dashboard/heartbeat.svg')}}" alt="" class="absolute w-36 h-40 xl:w-auto xl:h-40 right-0 hidden md:block">
			</div>

			<div class="flex flex-row items-center justify-center space-x-2 md:space-x-5">
				<div class="flex flex-col relative items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200" title="This shows the times you used the Enhanced Med-Bot for this week.">
					<p class="flex font-roboto font-normal text-black text-sm xl:text-xl md:text-base">Weekly Count</p>
					
					<div class="flex flex-row w-full h-fit items-center justify-evenly">
						<img src="{{asset('images/dashboard/BP.svg')}}" alt=""  class="w-12 lg:w-24 h-12 lg:h-24">
						<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Week">{{$weeklyCount}}</p>
					</div>
					<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">	
				</div>

				<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200" title="This shows the times you used the Enhanced Med-Bot for this month.">
					<p class="flex font-roboto font-normal text-black text-sm md:text-base xl:text-xl">Monthly Count</p>
					
					<div class="flex flex-row w-full h-fit items-center justify-evenly">
						<img src="{{asset('images/dashboard/BP.svg')}}" alt="" class="w-12 lg:w-24 h-12 lg:h-24">
						<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Month">{{$monthlyCount}}</p>
					</div> 
					<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">   
				</div>

			</div>

			<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[100px] lg:h-[150px] w-[150px] lg:w-[200px] space-y-2 bg-blue-200" title="This shows the times you used the Enhanced Med-Bot for this year.">
            	<p class="flex font-roboto font-normal text-black text-sm md:text-base xl:text-xl">Yearly Count</p>
				
				<div class="flex flex-row w-full h-fit items-center justify-evenly">
					<img src="{{asset('images/dashboard/BP.svg')}}" alt="" class="w-12 lg:w-24 h-12 lg:h-24">
					<p class="font-roboto font-bold text-black text-2xl lg:text-4xl" title="Number of user interaction with the enhanced Med-Bot per Year">{{$yearlyCount}}</p>
				</div>    
				<img src="{{asset('images/dashboard/bg_design.png')}}" alt="" class=" absolute w-16 lg:w-24 h-16 lg:h-24 bottom-0 left-0 -z-10 rounded-xl ">
            </div>
			
			<img src="{{asset('images/side view.png')}}" alt="" class="w-36 h-44 md:w-36 md:h-48 lg:w-44 lg:h-52 xl:w-52 xl:h-64 md:hidden z-10">
			
		</div>
				
		<div class="flex items-center justify-center">
			<div class="flex flex-row items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit w-fit border border-gray-300 mt-10">
				<img src="{{asset('images/dashboard/low.svg')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-white mr-2 md:mr-5"> - Low</p>

				<img src="{{asset('images/dashboard/normal.svg')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-white mr-2 md:mr-5"> - Normal</p>

				<img src="{{asset('images/dashboard/high.svg')}}" alt="" class="w-6 h-6 md:w-8 md:h-8 mr-2">
				<p class="font-medium text-base md:text-lg text-white"> - High</p>
			</div>

		</div>

		<div class="flex items-center justify-center mt-10">
			<div class="flex flex-col items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit w-[95%] border border-gray-300">
				<p class="text-lg md:text-2xl font-semibold mb-2 text-white text-center">Your Vital Signs Reading History</p>
				<div id="reading-table" class="w-[100%]"></div>
			</div>
		</div>	
		<div class="fixed bottom-2 right-10 z-50 md:bottom-6 ">
			<div id="download-reading-button" class="flex flex-row items-center justify-center p-2 w-40 h-16 border border-white bg-[#5EDAD5] rounded-xl shadow-sm shadow-black transition-colors duration-300 hover:bg-[#4ac0b8] focus:bg-[#4ac0b8]">
				<img src="{{asset('images/about/vector.png')}}" alt="" class="w-8 h-8">
				<button class="text-roboto font-medium text-sm text-black text-center cursor-pointer">Download Vital Signs Reading History</button>
			</div>
		</div>
		
		<div id="blur-overlay" class="hidden fixed w-[100%] h-[100%] backdrop-blur-sm"></div>
		
		<div id="pop-up-box" class=" hidden fixed flex-col border-2 w-[80%] md:w-[50%] lg:w-[40%] xl:w-[30%] h-auto rounded-xl items-center  bg-white drop-shadow-lg shadow-lg z-50 top-[40%] left-[10%] md:left-[25%] lg:left-[35%]">
			<p class="font-roboto text-sm text-center uppercase font-bold md:text-base p-2">Download Your Readings Here</p>
			<form class="p-4">
				<div class="flex flex-row items-center justify-center space-x-5">
					<label for="fromDate" class="block font-roboto text-sm font-medium text-gray-700">From:</label>
					<input type="date" id="fromDate" name="fromDate" class="mt-1 p-2 border rounded-md focus:ring focus:ring-blue-200" required>
				</div>

				<div class="flex flex-row items-center justify-center space-x-9">
					<label for="toDate" class="block mt-4 font-roboto text-sm font-medium text-gray-700">To:</label>
					<input type="date" id="toDate" name="toDate" class="mt-1 p-2 border rounded-md focus:ring focus:ring-blue-200" required>
				</div>

				<div class="flex flex-row items-center justify-end">
					<button type="button" id="download-button" type="button" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Download</button>
				</div>
				
			</form>
		</div>
		<input type="text" id="user-id" class="hidden" value={{ $user->id }}>
	</div>

	
	<script src="{{asset('/js/gridjs.umd.js')}}"></script>
	<script src="{{asset('/js/professional_readings.js')}}"></script>
	<script src="{{asset('/js/download_readings.js')}}"></script>
	
  
</body>
</html>