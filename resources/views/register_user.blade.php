<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative flex w-full h-fit bg-gradient-to-r from-[#5B86E5] to-[#305AB9]">
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

                <form action="/register_user" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-4 items-start mt-4 md:grid-cols-2 lg:grid-cols-3">
                    
                        <div class="grid flex flex-col justify-center items-center md:col-span-2 lg:row-span-5 lg:col-span-1"> 
                            <img src="{{asset('images/register/Profile pic.svg')}}" alt="" class="h-20 w-20 mx-auto">
                            <p class="font-roboto text-gray-700 text-sm font-normal">Profile Picture</p>
                            <input type="file" class="hidden" id="profile" name="profile">
                        </div> 
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="firstname">First Name</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstname" type="text" placeholder="First Name" name=first_name value="{{old('first_name')}}">
                        </div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="lastname">Last Name</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
                        </div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="suffix">Suffix</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="suffix" type="text" placeholder="Suffix" name="suffix" value="{{old('suffix')}}">
                        </div>
    
                        <div class="grid"></div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="sex">Sex</label>
                            <div class="relative">
                               <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="sex" value="{{old('sex')}}">
                                    <option disabled selected hidden class="text-gray-400">Select an option</option>
                                    <option class="text-gray-400" value="male">Male</option>
                                    <option class="text-gray-400" value="female">Female</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                </div>
                            </div>
                        </div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="dob">Date of birth (MM/DD/YY)</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dob" type="date" placeholder="Select a date" name="birthday" value="{{old('birthday')}}">
                        </div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="municipality">Municipality</label>
                            <div class="relative">
                               <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="municipality" value="{{old('municipality')}}">
                                    <option disabled selected hidden>Select a Municipality</option>
                                    <option value="boac">Boac</option>
                                    <option value="buenavista">Buenavista</option>
                                    <option value="gasan">Gasan</option>
                                    <option value="mogpog">Mogpog</option>
                                    <option value="santacruz">Santa Cruz</option>
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
                               <select class="shadow appearance-none border rounded w-full h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="barangay" value="{{old('barangay')}}">
                                    <option disabled selected hidden>Select a barangay</option>
                                    <option value="agot">Agot</option>
                                    <option value="agumaymayan">Agumaymayan</option>
                                    <option value="amoingon">Amoingon</option>
                                    <option value="apitong">Apitong</option>
                                    <option value="balagasan">Balagasan</option>
                                    <option value="balaring">Balaring</option>
                                    <option value="balimbing">Balimbing</option>
                                    <option value="balogo">Balogo</option>
                                    <option value="bamban">Bamban</option>
                                    <option value="bangbangalon">Bangbangalon</option>
                                    <option value="bantad">Bantad</option>
                                    <option value="bantay">Bantay</option>
                                    <option value="bayuti">Bayuti</option>
                                    <option value="binunga">Binunga</option>
                                    <option value="boi">Boi</option>
                                    <option value="boton">Boton</option>
                                    <option value="buliasnin">Buliasnin</option>
                                    <option value="bunganay">Bunganay</option>
                                    <option value="caganhao">Caganhao</option>
                                    <option value="canat">Canat</option>
                                    <option value="catubugan">Catubugan</option>
                                    <option value="cawit">Cawit</option>
                                    <option value="daig">Daig</option>
                                    <option value="daypay">Daypay</option>
                                    <option value="duyay">Duyay</option>
                                    <option value="hinapulan">Hinapulan</option>
                                    <option value="ihatub">Ihatub</option>
                                    <option value="isok I">Isok I</option>
                                    <option value="isok II poblacion">Isok II Poblacion</option>
                                    <option value="laylay">Laylay</option>
                                    <option value="lupac">Lupac</option>
                                    <option value="mahinhin">Mahinhin</option>
                                    <option value="mainit">Mainit</option>
                                    <option value="malbog">Malbog</option>
                                    <option value="maligaya">Maligaya</option>
                                    <option value="malusak">Malusak</option>
                                    <option value="mansiwat">Mansiwat</option>
                                    <option value="mataas na Bayan">Mataas na Bayan</option>
                                    <option value="maybo">Maybo</option>
                                    <option value="mercado">Mercado</option>
                                    <option value="murallon">Murallon</option>
                                    <option value="ogbac">Ogbac</option>
                                    <option value="pawa">Pawa</option>
                                    <option value="pili">Pili</option>
                                    <option value="poctoy">Poctoy</option>
                                    <option value="poras">Poras</option>
                                    <option value="puting buhangin">Puting Buhangin</option>
                                    <option value="puyog">Puyog</option>
                                    <option value="sabong">Sabong</option>
                                    <option value="san Miguel">San Miguel</option>
                                    <option value="santol">Santol</option>
                                    <option value="sawi">Sawi</option>
                                    <option value="tabi">Tabi</option>
                                    <option value="tabigue">Tabigue</option>
                                    <option value="tagwak">Tagwak</option>
                                    <option value="tambunan">Tambunan</option>
                                    <option value="tampus,">Tampus,</option>
                                    <option value="tanza">Tanza</option>
                                    <option value="tugos">Tugos</option>
                                    <option value="tumagabok">Tumagabok</option>
                                    <option value="tumapon">Tumapon</option>

                                    <option value="Bagacay">Bagacay</option>
                                    <option value="Bagtingon">Bagtingon</option>
                                    <option value="Barangay I">Barangay I</option>
                                    <option value="Barangay II">Barangay II</option>
                                    <option value="Barangay III">Barangay III</option>
                                    <option value="Barangay IV">Barangay IV</option>
                                    <option value="Bicas-bicas">Bicas-bicas</option>
                                    <option value="Caigangan">Caigangan</option>
                                    <option value="Daykitin">Daykitin</option>
                                    <option value="Libas">Libas</option>
                                    <option value="Malbog">Malbog</option>
                                    <option value="Sihi">Sihi</option>
                                    <option value="Timbo">Timbo</option>
                                    <option value="Tungib-Lipata">Tungib-Lipata</option>
                                    <option value="Yook">Yook</option>

                                    <option value="Antipolo">Antipolo</option>
                                    <option value="Bachao Ibaba">Bachao Ibaba</option>
                                    <option value="Bachao Ilaya">Bachao Ilaya</option>
                                    <option value="Bacongbacong">Bacongbacong</option>
                                    <option value="Bahi">Bahi</option>
                                    <option value="Bangbang">Bangbang</option>
                                    <option value="Banot">Banot</option>
                                    <option value="Banuyo">Banuyo</option>
                                    <option value="Barangay I">Barangay I</option>
                                    <option value="Barangay II">Barangay II</option>
                                    <option value="Barangay III">Barangay III</option>
                                    <option value="Bognuyan">Bognuyan</option>
                                    <option value="Cabugao">Cabugao</option>
                                    <option value="Dawis">Dawis</option>
                                    <option value="Dili">Dili</option>
                                    <option value="Libtangin">Libtangin</option>
                                    <option value="Mahunig">Mahunig</option>
                                    <option value="Mangiliol">Mangiliol</option>
                                    <option value="Masiga">Masiga</option>
                                    <option value="Matandang Gasan">Matandang Gasan</option>
                                    <option value="Pangi">Pangi</option>
                                    <option value="Pingan">Pingan</option>
                                    <option value="Tabionan">Tabionan</option>
                                    <option value="Tapuyan">Tapuyan</option>
                                    <option value="Tiguion">Tiguion</option>

                                    <option value="Anapog-Sibucao">Anapog-Sibucao</option>
                                    <option value="Argao">Argao</option>
                                    <option value="Balanacan">Balanacan</option>
                                    <option value="Banto">Banto</option>
                                    <option value="Bintakay">Bintakay</option>
                                    <option value="Bocboc">Bocboc</option>
                                    <option value="Butansapa">Butansapa</option>
                                    <option value="Candahon">Candahon</option>
                                    <option value="Capayang">Capayang</option>
                                    <option value="Danao">Danao</option>
                                    <option value="Dulong Bayan">Dulong Bayan</option>
                                    <option value="Gitnang Bayan">Gitnang Bayan</option>
                                    <option value="Guisian">Guisian</option>
                                    <option value="Hinadharan">Hinadharan</option>
                                    <option value="Hinanggayon">Hinanggayon</option>
                                    <option value="Ino">Ino</option>
                                    <option value="Janagdong">Janagdong</option>
                                    <option value="Lamesa">Lamesa</option>
                                    <option value="Laon">Laon</option>
                                    <option value="Magapua">Magapua</option>
                                    <option value="Malayak">Malayak</option>
                                    <option value="Malusak">Malusak</option>
                                    <option value="Mampaitan">Mampaitan</option>
                                    <option value="Mangyan-Mababad">Mangyan-Mababad</option>
                                    <option value="Market Site">Market Site</option>
                                    <option value="Mataas na Bayan">Mataas na Bayan</option>
                                    <option value="Mendez">Mendez</option>
                                    <option value="Nangka I">Nangka I</option>
                                    <option value="Nangka II">Nangka II</option>
                                    <option value="Paye">Paye</option>
                                    <option value="Pili">Pili</option>
                                    <option value="Puting Buhangin">Puting Buhangin</option>
                                    <option value="Sayao">Sayao</option>
                                    <option value="Silangan">Silangan</option>
                                    <option value="Sumangga">Sumangga</option>
                                    <option value="Tarug">Tarug</option>
                                    <option value="Villa Mendez">Villa Mendez</option>

                                    <option value="Alobo">Alobo</option>
                                    <option value="Angas">Angas</option>
                                    <option value="Aturan">Aturan</option>
                                    <option value="Bagong Silang Poblacion">Bagong Silang Poblacion</option>
                                    <option value="Baguidbirin">Baguidbirin</option>
                                    <option value="Baliis">Baliis</option>
                                    <option value="Balogo">Balogo</option>
                                    <option value="Banahaw Poblacion">Banahaw Poblacion</option>
                                    <option value="Bangcuangan">Bangcuangan</option>
                                    <option value="Banogbog">Banogbog</option>
                                    <option value="Biga">Biga</option>
                                    <option value="Botilao">Botilao</option>
                                    <option value="Buyabod">Buyabod</option>
                                    <option value="Dating Bayan">Dating Bayan</option>
                                    <option value="Devilla">Devilla</option>
                                    <option value="Dolores">Dolores</option>
                                    <option value="Haguimit">Haguimit</option>
                                    <option value="Hupi">Hupi</option>
                                    <option value="Ipil">Ipil</option>
                                    <option value="Jolo">Jolo</option>
                                    <option value="Kaganhao">Kaganhao</option>
                                    <option value="Kalangkang">Kalangkang</option>
                                    <option value="Kamandugan">Kamandugan</option>
                                    <option value="Kasily">Kasily</option>
                                    <option value="Kilo-kilo">Kilo-kilo</option>
                                    <option value="Kiñaman">Kiñaman</option>
                                    <option value="Labo">Labo</option>
                                    <option value="Lamesa">Lamesa</option>
                                    <option value="Landy">Landy</option>
                                    <option value="Lapu-lapu Poblacion">Lapu-lapu Poblacion</option>
                                    <option value="Libjo">Libjo</option>
                                    <option value="Lipa">Lipa</option>
                                    <option value="Lusok">Lusok</option>
                                    <option value="Maharlika Poblacion">Maharlika Poblacion</option>
                                    <option value="Makulapnit">Makulapnit</option>
                                    <option value="Maniwaya">Maniwaya</option>
                                    <option value="Manlibunan">Manlibunan</option>
                                    <option value="Masaguisi">Masaguisi</option>
                                    <option value="Masalukot">Masalukot</option>
                                    <option value="Matalaba">Matalaba</option>
                                    <option value="Mongpong">Mongpong</option>
                                    <option value="Morales">Morales</option>
                                    <option value="Napo">Napo</option>
                                    <option value="Pag-asa Poblacion">Pag-asa Poblacion</option>
                                    <option value="Pantayin">Pantayin</option>
                                    <option value="Polo">Polo</option>
                                    <option value="Pulong-Parang">Pulong-Parang</option>
                                    <option value="Punong">Punong</option>
                                    <option value="San Antonio">San Antonio</option>
                                    <option value="San Isidro">San Isidro</option>
                                    <option value="Tagum">Tagum</option>
                                    <option value="Tamayo">Tamayo</option>
                                    <option value="Tambangan">Tambangan</option>
                                    <option value="Tawiran">Tawiran</option>
                                    <option value="Taytay">Taytay</option>

                                    <option value="Bangwayin">Bangwayin</option>
                                    <option value="Bayakbakin">Bayakbakin</option>
                                    <option value="Bolo">Bolo</option>
                                    <option value="Bonliw">Bonliw</option>
                                    <option value="Buangan">Buangan</option>
                                    <option value="Cabuyo">Cabuyo</option>
                                    <option value="Cagpo">Cagpo</option>
                                    <option value="Dampulan">Dampulan</option>
                                    <option value="Kay Duke">Kay Duke</option>
                                    <option value="Mabuhay">Mabuhay</option>
                                    <option value="Makawayan">Makawayan</option>
                                    <option value="Malibago">Malibago</option>
                                    <option value="Malinao">Malinao</option>
                                    <option value="Maranlig">Maranlig</option>
                                    <option value="Marlangga">Marlangga</option>
                                    <option value="Matuyatuya">Matuyatuya</option>
                                    <option value="Nangka">Nangka</option>
                                    <option value="Pakaskasan">Pakaskasan</option>
                                    <option value="Payanas">Payanas</option>
                                    <option value="Poblacion">Poblacion</option>
                                    <option value="Poctoy">Poctoy</option>
                                    <option value="Sibuyao">Sibuyao</option>
                                    <option value="Suha">Suha</option>
                                    <option value="Talawan">Talawan</option>
                                    <option value="Tigwi">Tigwi</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <img src="{{asset('images/register/menu-down (1).svg')}}" alt="Dropdown Icon" class="h-5 w-5 text-gray-700">
                                </div>
                            </div>
                        </div>

                        <script>
                            const barangayOptions = {
                                boac:['Agot',
                                    'Agumaymayan',
                                    'Amoingon',
                                    'Apitong',
                                    'Balagasan',
                                    'Balaring',
                                    'Balimbing',
                                    'Balogo',
                                    'Bamban',
                                    'Bangbangalon',
                                    'Bantad',
                                    'Bantay',
                                    'Bayuti',
                                    'Binunga',
                                    'Boi',
                                    'Boton',
                                    'Buliasnin',
                                    'Bunganay',
                                    'Caganhao',
                                    'Canat',
                                    'Catubugan',
                                    'Cawit',
                                    'Daig',
                                    'Daypay',
                                    'Duyay',
                                    'Hinapulan',
                                    'Ihatub',
                                    'Isok I',
                                    'Ison II Poblacion',
                                    'Laylay',
                                    'Lupac',
                                    'Mahinhin',
                                    'Mainit',
                                    'Malbog',
                                    'Maligaya',
                                    'Malusak',
                                    'Mansiwat',
                                    'Mataas na Bayan',
                                    'Maybo',
                                    'Mercado',
                                    'Murallon',
                                    'Ogbac',
                                    'Pawa',
                                    'Pili',
                                    'Poctoy',
                                    'Poras',
                                    'Puting Buhangin',
                                    'Puyog',
                                    'Sabong',
                                    'San Miguel',
                                    'Santol',
                                    'Sawi',
                                    'Tabi',
                                    'Tabigue',
                                    'Tagwak',
                                    'Tambunan',
                                    'Tampus',
                                    'Tanza',
                                    'Tugos',
                                    'Tumagabok',
                                    'Tumapon'
                                ],

                                buenavista:[
                                    'Bagacay',
                                    'Bagtingon',
                                    'Barangay I',
                                    'Barangay II',
                                    'Barangay III',
                                    'Barangay IV',
                                    'Bicas-bicas',
                                    'Caigangan',
                                    'Daykitin',
                                    'Libas',
                                    'Malbog',
                                    'Sihi',
                                    'Timbo',
                                    'Tungib-Lipata',
                                    'Yook' 
                                ],
                                gasan:[
                                    'Antipolo',
                                    'Bachao Ibaba',
                                    'Bachao Ilaya',
                                    'Bacongbacong',
                                    'Bahi',
                                    'Bangbang',
                                    'Banot',
                                    'Banuyo',
                                    'Barangay I',
                                    'Barangay II',
                                    'Barangay III',
                                    'Bognuyan',
                                    'Cabugao',
                                    'Dawis',
                                    'Dili',
                                    'Libtangin',
                                    'Mahunig',
                                    'Mangiliol',
                                    'Masiga',
                                    'Matandang Gasan',
                                    'Pangi',
                                    'Pinggan',
                                    'Tabionan',
                                    'Tapuyan',
                                    'Tiguion'
                                ],
                                mogpog:[
                                    'Anapog-Sibucao',
                                    'Argao',
                                    'Balanacan',
                                    'Banto',
                                    'Bintakay',
                                    'Bocboc',
                                    'Butansapa',
                                    'Candahon',
                                    'Capayang',
                                    'Danao',
                                    'Dulong Bayan',
                                    'Gitnang Bayan',
                                    'Guisian',
                                    'Hinadharan',
                                    'Hinanggayon',
                                    'Ino',
                                    'Janagdong',
                                    'Lamesa',
                                    'Laon',
                                    'Magapua',
                                    'Malayak',
                                    'Malusak',
                                    'Mampaitan',
                                    'Mangyan-Mababad',
                                    'Market Site',
                                    'Mataas na Bayan',
                                    'Mendez',
                                    'Nangka I',
                                    'Nangka II',
                                    'Paye',
                                    'Pili',
                                    'Puting Buhangin',
                                    'Sayao',
                                    'Silangan',
                                    'Sumangga',
                                    'Tarug',
                                    'Villa Mendez'
                                ],
                                santacruz:[
                                    'Alobo',
                                    'Angas',
                                    'Aturan',
                                    'Bagon Silang Poblacion',
                                    'Baguidbirin',
                                    'Baliis',
                                    'Balogo',
                                    'Banahaw Poblacion',
                                    'Bangcuangan',
                                    'Banogbog',
                                    'Biga',
                                    'Botilao',
                                    'Buyabod',
                                    'Dating Bayan',
                                    'Devilla',
                                    'Dolores',
                                    'Haguimit',
                                    'Hupi',
                                    'Ipil',
                                    'Jolo',
                                    'Kaganhao',
                                    'Kalangkang',
                                    'Kamandungan',
                                    'Kasily',
                                    'Kilo-kilo',
                                    'Kiñaman',
                                    'Labo',
                                    'Lamesa',
                                    'Landy',
                                    'Lapu-lapu Poblacion',
                                    'Libjo',
                                    'Lipa',
                                    'Lusok',
                                    'Maharlika Poblacion',
                                    'Makulapnit',
                                    'Maniwaya',
                                    'Manlibunan',
                                    'Masaguisi',
                                    'Masalukot',
                                    'Matalaba',
                                    'Mongpong',
                                    'Morales',
                                    'Napo',
                                    'Pag-asa Poblacion',
                                    'Pantayin',
                                    'Polo',
                                    'Pulong-parang',
                                    'Punong',
                                    'San Antonio',
                                    'San Isidro',
                                    'Tagum',
                                    'Tamayo',
                                    'Tambangan',
                                    'Tawiran',
                                    'Taytay'
                                ],
                                torrijos:[
                                    'Bangwayin',
                                    'Bayakbakin',
                                    'Bolo',
                                    'Bonliw',
                                    'Buangan',
                                    'Cabuyo',
                                    'Cagpo',
                                    'Dampulan',
                                    'Kay Duke',
                                    'Mabuhay',
                                    'Makawayan',
                                    'Malibago',
                                    'Malinao',
                                    'Maranlig',
                                    'Marlangga',
                                    'Matuyatuya',
                                    'Nangka',
                                    'Pakaskasan',
                                    'Payanas',
                                    'Poblacion',
                                    'Poctoy',
                                    'Sibuyao',
                                    'Suha',
                                    'Talawan',
                                    'Tigwi'
                                ]
                            };

                            const minucipalitySelect = document.getElementById ("municipality");
                            const barangaySelect = document.getElementById ("barangay");

                            function populateBarangay() {
                                const selectMunicipality =municipalitySelect.value;
                                barangaySelect.innerHTML = "<option disabled selected hidden>Select a Barangay</option>";
                                
                                if (barangayOptions[selectMunicipality]) {
                                    const selectBarangays = barangayOptions[selectMunicipality];
                                }
                            }

    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="cn">Contact Number</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cn" type="text" placeholder="Contact Number" name="contact" value="{{old('contact')}}">
                        </div>
    
                        <div class="grid flex flex-col items-start space-y-0.5">
                            <label class=" text-gray-700 text-sm font-normal" for="email">Email</label>
                            <input class="shadow appearance-none border rounded h-fit py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email" name="email" value="{{old('email')}}">
                        </div>
                    </div>
                
                

                    <div class="flex justify-center items-center my-7 md:items-center md:my-10">
                        <input type="checkbox" class=" checked:bg-black w-4 h-4">
                        <span class="ml-2 text-sm text-black text-center">I agree to the <a href="#" class="text-[#7A9DEA] underline underline-offset-2">Terms and Condition</a></span>
                    </div>

                    <div class="flex justify-center items-center my-2 md:my-0">
                        <button class="flex items-center justify-center border rounded-full w-28 h-11 bg-[#47B0E1] font-roboto font-medium text-base text-white md:w-32 md:h-12">Register</button>
                    </div>

                    <div class="flex justify-center items-center mt-2 md:my-7">
                        <p class="font-roboto text-sm font-medium text-[#2D3748] md:text-base">Already have an account? <a href="#" class="text-[#5B86E5] underline underline-offset-4">Login here</a></p>
                    </div>
                </form>
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