const boac_barangays = [
    'Agot',
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
];
const buenavista_barangays = [
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
];
const gasan_barangays = [
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
];
const mogpog_barangays = [
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
];
const sta_cruz_barangays = [
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
];
const torrijos_barangays = [
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
]; 

console.log('sss');
const municipalityDropdown = document.getElementById('municipality');
const barangayDropdown = document.getElementById('barangay');

function addOptions(select, list){
    select.innerHTML = '';
    var nullOption = document.createElement('option');
    nullOption.value = 'null';
    nullOption.innerHTML = 'Select Barangay...'
    nullOption.disabled = true;
    nullOption.selected = true;
    nullOption.hidden = true;
    select.appendChild(nullOption);
    for(let i = 0; i < list.length; i++){
        var option = document.createElement('option');
        option.value = list[i];
        option.innerHTML = list[i];
        select.appendChild(option);
    }
}

municipalityDropdown.addEventListener('change', function(){
    var value = municipalityDropdown.value;
    if(value == 'null'){
        addOptions(barangayDropdown, []);
    }
    else if(value == 'Boac'){
        addOptions(barangayDropdown, boac_barangays);
    }
    else if(value == 'Buenavista'){
        addOptions(barangayDropdown, buenavista_barangays);
    }
    else if(value == 'Gasan'){
        addOptions(barangayDropdown, gasan_barangays);
    }
    else if(value == 'Mogpog'){
        addOptions(barangayDropdown, mogpog_barangays);
    }
    else if(value == 'Sta. Cruz'){
        addOptions(barangayDropdown, sta_cruz_barangays);
    }
    else if(value == 'Torrijos'){
        addOptions(barangayDropdown, torrijos_barangays);
    }
});