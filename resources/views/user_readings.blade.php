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

	<div class="flex flex-col w-screen h-screen bg-gradient-to-r from-[#5b86e5] to-[#305ab9]">
		
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

		<div class="flex items-center justify-center space-x-5">
			<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[150px] w-[200px] space-y-2 bg-blue-200 ">
            	<p class="flex font-roboto font-normal text-black text-sm md:text-base">Weekly Count</p>
				
				<div class="flex flex-row w-full h-fit items-center justify-evenly">
					<img src="{{asset('images/dashboard/design_patient.png')}}" alt="" title="Healthcare Professional" class="w-24 h-24">
					<p class="font-roboto font-bold text-black text-2xl lg:text-4xl">1</p>
				</div>   
              	    
            </div>

			<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[150px] w-[200px] space-y-2 bg-blue-200 ">
            	<p class="flex font-roboto font-normal text-black text-sm md:text-base">Monthly Count</p>
				
				<div class="flex flex-row w-full h-fit items-center justify-evenly">
					<img src="{{asset('images/dashboard/design_patient.png')}}" alt="" title="Healthcare Professional" class="w-24 h-24">
					<p class="font-roboto font-bold text-black text-2xl lg:text-4xl">1</p>
				</div>    
              	    
            </div>

			<div class="flex flex-col items-center p-2 rounded-xl drop-shadow-lg shadow-lg border border-gray-300 h-[150px] w-[200px] space-y-2 bg-blue-200 ">
            	<p class="flex font-roboto font-normal text-black text-sm md:text-base">Yearly Count</p>
				
				<div class="flex flex-row w-full h-fit items-center justify-evenly">
					<img src="{{asset('images/dashboard/design_patient.png')}}" alt="" title="Healthcare Professional" class="w-24 h-24">
					<p class="font-roboto font-bold text-black text-2xl lg:text-4xl">1</p>
				</div>    
              	    
            </div>
		</div>


		
		<div class="flex justify-center mt-10">

			<div class="items-center justify-center p-2 rounded-xl drop-shadow-lg shadow-lg h-fit border border-gray-300 w-fit ">
				<p class="text-2xl font-semibold mb-4 text-white text-center">Your Vital Readings</p>
				<div id="test-table"></div>
			</div>
		</div>
		
	</div>

	<script src="{{asset('/js/gridjs.umd.js')}}"></script>
	<script src="{{asset('/js/test.js')}}"></script>
  
</body>
</html>