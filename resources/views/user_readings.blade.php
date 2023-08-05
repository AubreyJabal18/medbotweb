<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Readings</title>
	@vite('resources/css/app.css')
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
		
		<div class="max-w-3xl mx-auto">
			<h1 class="text-2xl font-semibold mb-4 text-white">Your Vital Readings</h1>
			<table class="min-w-full divide-y divide-gray-200">
				<thead class="bg-gray-50">
				  <tr>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					  Date
					</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					  Blood Pressure (mmHg)
					</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					  Blood Saturation (%)
					</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					  Temperature (°C)
					</th>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
					  Pulse Rate (bpm)
					</th>
				  </tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200">
				  <!-- Replace the content below with actual data -->
				  <tr>
					<td class="px-6 py-4 whitespace-nowrap">2023-07-31</td>
					<td class="px-6 py-4 whitespace-nowrap">120/80</td>
					<td class="px-6 py-4 whitespace-nowrap">98%</td>
					<td class="px-6 py-4 whitespace-nowrap">37.5</td>
					<td class="px-6 py-4 whitespace-nowrap">70</td>
				  </tr>
				  <!-- Add more rows for additional readings -->
				</tbody>
			  </table>
		  </div>


		
	</div>

  
</body>
</html>