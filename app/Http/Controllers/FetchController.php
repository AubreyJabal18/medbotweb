<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\User;
use App\Models\Reading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FetchController extends Controller
{

    private $boac_barangays = [
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

    private $buenavista_barangays = [
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

    private $gasan_barangays = [
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

    private $mogpog_barangays = [
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

    private $sta_cruz_barangays = [
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

    private $torrijos_barangays = [
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

    public function getQrCode(Request $request){
        $path = '../public/storage/qrcodes/'.$request->id.'.png';
        return response()->download($path);
    }

    // FOR PROFESSIONAL DASHBOARD DATA//
    
    // FOR PATIENTS USED MED-BOT//
    public function getUsers(){
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }

    public function getPatientUses(Request $request){
        if($request->by == 'weekly'){
            $year = substr($request->value, 0, 4);
            $week = substr($request->value, 6, 2);
            $dates = $this->getWeek($week, $year);
            $users = Reading::with('user')
                ->whereBetween('created_at', [$dates['start'], $dates['end']])
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $uses = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $uses[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'uses' => $uses
            ]);
        }
        else if($request->by == 'monthly'){
            $year = substr($request->value, 0, 4);
            $month = substr($request->value, 5, 2);
            $users = Reading::with('user')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();
            $dates = $this->getMonth($month, $year);
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $uses = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $uses[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'uses' => $uses
            ]);
        }
        else {
            $year = substr($request->value, 0, 4);
            $users = Reading::with('user')
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('M');
                })
                ->toArray();
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $uses = [];
            foreach($months as $month){
                $uses[$month] = array_key_exists($month, $users) ? $users[$month] : 0;
            }

            return response()->json([
                'uses' => $uses
            ]);
        }
    }

    // FOR PATIENTS REGISTERED TO MED-BOT//
    public function getRegisters(){
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }

    public function getPatientRegisters(Request $request){
        if($request->registered_by == 'weekly'){
            $year = substr($request->registered_value, 0, 4);
            $week = substr($request->registered_value, 6, 2);
            $dates = $this->getWeek($week, $year);
            $users = User::where('type', 'patient')
                ->whereBetween('created_at', [$dates['start'], $dates['end']])
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();    
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $registers = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $registers[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'registers' => $registers
            ]);
        }
        else if($request->registered_by == 'monthly'){
            $year = substr($request->registered_value, 0, 4);
            $month = substr($request->registered_value, 5, 2);
            $users = User::where('type', 'patient')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();
            $dates = $this->getMonth($month, $year);
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $registers = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $registers[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'registers' => $registers
            ]);
        }
        else {
            $year = substr($request->registered_value, 0, 4);
            $users = User::where('type', 'patient')
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('M');
                })
                ->toArray();
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $registers = [];
            foreach($months as $month){
                $registers[$month] = array_key_exists($month, $users) ? $users[$month] : 0;
            }
            return response()->json([
                'registers' => $registers
            ]);
        }
    
    }
   
    private function getWeek($week, $year){
        $date = Carbon::now();
        $date->setISODate($year, $week);
        $dates = [
            'start' => $date->startOfWeek()->toDateString(),
            'end' => $date->endOfWeek()->toDateString()
        ];
        return $dates;
    }
    
    private function getMonth($month, $year){
        $date = Carbon::createFromDate($year, $month, 1);
        $dates = [
            'start' => $date->startOfMonth()->toDateString(),
            'end' => $date->endOfMonth()->toDateString()
        ];
        return $dates;
    }
   
    // FOR PATIENTS READINGS
    public function getReadings(){
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }

    public function getPatientReadings(Request $request){
        if($request->reading_by == 'weekly'){
            $year = substr($request->reading_value, 0, 4);
            $week = substr($request->reading_value, 6, 2);
            $dates = $this->getWeek($week, $year);
            $users = Reading::with('user')
                ->where($request->municipality == 'All')
                ->whereBetween('created_at', [$dates['start'], $dates['end']])
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $patient_readings = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $patient_readings[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'patient_readings' => $patient_readings
            ]);
        }
        else if($request->reading_by == 'monthly'){
            $year = substr($request->reading_value, 0, 4);
            $month = substr($request->reading_value, 5, 2);
            $users = User::where('type', 'patient')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                })
                ->toArray();
            $dates = $this->getMonth($month, $year);
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $patient_readings = [];
            foreach ($period as $date) {
                $key = $date->format('Y-m-d');
                $patient_readings[$key] = array_key_exists($key, $users) ? $users[$key] : 0;
            }
            return response()->json([
                'patient_readings' => $patient_readings
            ]);
        }
        else {
            $year = substr($request->reading_value, 0, 4);
            $users = User::where('type', 'patient')
                ->whereYear('created_at', $year)
                ->get()
                ->countBy(function ($item) {
                    return Carbon::parse($item->created_at)->format('M');
                })
                ->toArray();
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            $patient_readings = [];
            foreach($months as $month){
                $patient_readings[$month] = array_key_exists($month, $users) ? $users[$month] : 0;
            }
            return response()->json([
                'patient_readings' => $patient_readings
            ]);
        }
    
    }
//    FOR PATIENT COUNT BY SEX//

    public function getPatientCountBySex(Request $request){
        $sex_count = [];
        if(ucwords($request->municipality) == 'All'){
            $users = User::where('type', 'patient')
                ->get()
                ->groupBy('sex');
            $municipalities = ['Boac', 'Buenavista', 'Gasan', 'Mogpog', 'Sta. Cruz', 'Torrijos'];
            $females = $users->has('female') ? $users['female']->countBy('municipality')->toArray() : [];
            $males = $users->has('male') ? $users['male']->countBy('municipality')->toArray() : [];
            foreach($municipalities as $municipalities){
                $key = $municipalities;
                $sex_count['female'][$key] = array_key_exists($key, $females) ?  $females[$key] : 0;
                $sex_count['male'][$key] = array_key_exists($key, $males) ?  $males[$key] : 0;
            }
            
        }
        
        else{
            $users = User::where('type', 'patient')
                ->where('municipality',ucwords($request->municipality))
                ->get()
                ->groupBy('sex');
            if(ucwords($request->municipality) == 'Boac'){
                $barangays = $this->boac_barangays;
            }
            else if(ucwords($request->municipality) == 'Buenavista'){
                $barangays = $this->buenavista_barangays;
            }
            else if(ucwords($request->municipality) == 'Gasan'){
                $barangays = $this->gasan_barangays;
            }
            else if(ucwords($request->municipality) == 'Mogpog'){
                $barangays = $this->mogpog_barangays;
            }
            else if(ucwords($request->municipality) == 'Sta. Cruz'){
                $barangays = $this->sta_cruz_barangays;
            }
            else if(ucwords($request->municipality) == 'Torrijos'){
                $barangays = $this->torrijos_barangays;
            }
            else{
                return response()->json([
                    'sex_count' => 'Bad Request'
                ]);
            }
       
            $females = $users->has('female') ? $users['female']->countBy('barangay')->toArray() : [];
            $males = $users->has('male') ? $users['male']->countBy('barangay')->toArray() : [];
            foreach($barangays as $barangay){
                $key = $barangay;
                $sex_count['female'][$key] = array_key_exists($key, $females) ?  $females[$key] : 0;
                $sex_count['male'][$key] = array_key_exists($key, $males) ?  $males[$key] : 0;
            }
        }
            return response()->json([
                'sex_count' => $sex_count
            ]);
        
        }
    
   //    FOR PATIENT COUNT BY LOCATION//
   public function getPatientCountByLocation(Request $request){
    $location_count = [];
    if(ucwords($request->municipality) == 'All'){
        $users = User::where('type', 'patient')
            ->get()
            ->groupBy('type');
        $municipalities = ['Boac', 'Buenavista', 'Gasan', 'Mogpog', 'Sta. Cruz', 'Torrijos'];
        $patients = $users->has('patient') ? $users['patient']->countBy('municipality')->toArray() : [];
        foreach($municipalities as $municipalities){
            $key = $municipalities;
            $location_count['patient'][$key] = array_key_exists($key, $patients) ?  $patients[$key] : 0;
        }
    }
    else{
        $users = User::where('type', 'patient')
            ->where('municipality',ucwords($request->municipality))
            ->get()
            ->groupBy('type');
        if(ucwords($request->municipality) == 'Boac'){
            $barangays = $this->boac_barangays;
        }
        else if(ucwords($request->municipality) == 'Buenavista'){
            $barangays = $this->buenavista_barangays;
        }
        else if(ucwords($request->municipality) == 'Gasan'){
            $barangays = $this->gasan_barangays;
        }
        else if(ucwords($request->municipality) == 'Mogpog'){
            $barangays = $this->mogpog_barangays;
        }
        else if(ucwords($request->municipality) == 'Sta. Cruz'){
            $barangays = $this->sta_cruz_barangays;
        }
        else if(ucwords($request->municipality) == 'Torrijos'){
            $barangays = $this->torrijos_barangays;
        }
        else{
            return response()->json([
                'location_count' => 'Bad Request'
            ]);
        }
       
        $patients = $users->has('patient') ? $users['patient']->countBy('barangay')->toArray() : [];
        foreach($barangays as $barangay){
            $key = $barangay;
            $location_count['patient'][$key] = array_key_exists($key, $patients) ?  $patients[$key] : 0;
        }
    
    }
    return response()->json([
        'location_count' => $location_count
    ]);
}
    // PROFESSIONAL DASHBOARD (PATIENT PAGE)//

    public function getPatientListInProfessionalDashboard(Request $request){
        $formatted_users = [];
        $patients = User::where('type', 'patient')->get();
        foreach($patients as $patient){
            $temp_array = [
                $patient->id,
                $patient->first_name.' '.$patient->last_name.' '.$patient->suffix,
                $patient->sex,
                Carbon::parse($patient->birthday)->format('M d, Y'),
                $patient->barangay.' '.$patient->municipality,
                $patient->email];
            array_push($formatted_users, $temp_array);    
        }
        return response()->json([
            'patients_list' => $formatted_users
        ]);
    }

// FOR USER DASHBOARD DATA//

    // FOR READING TRENDS//
    public function getReadingTrends(Request $request){
        if($request->by == 'weekly'){
            $year = substr($request->value, 0, 4);
            $week = substr($request->value, 6, 2);
            $dates = $this->getStartAndEndDateFromWeek($week, $year);
            $readings = Reading::where('user_id', $request->id)
                ->whereBetween('created_at', [$dates['start'], $dates['end']])
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                });
            $readings_by_date = [];
            foreach($readings as $key => $value){
                $readings_by_date[$key] = $value[0];
            }
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $formatted_readings = [];
            foreach($period as $date){
                $key = $date->format('Y-m-d');
                $formatted_readings[$key] = array_key_exists($key, $readings_by_date) ? $formatted_readings[$key] = $readings_by_date[$key] : null;
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
        else if($request->by=='monthly'){
            $year = substr($request->value, 0, 4);
            $month = substr($request->value, 5, 2);
            $readings = Reading::where('user_id', $request->id)
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', $year)
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('Y-m-d');
                });
            $readings_by_date = [];
            foreach($readings as $key => $value){
                $readings_by_date[$key] = $value[0];
            }
            $dates = $this->getStartAndEndDateFromMonth($month, $year);
            $period = CarbonPeriod::create($dates['start'], $dates['end']);
            $formatted_readings = [];
            foreach($period as $date){
                $key = $date->format('Y-m-d');
                $formatted_readings[$key] = array_key_exists($key, $readings_by_date) ? $formatted_readings[$key] = $readings_by_date[$key] : null;
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
        else if($request->by=='yearly'){
            $year = $request->value;
            $readings = Reading::where('user_id', $request->id)
                ->whereYear('created_at', $year)
                ->latest()
                ->get()
                ->groupBy(function($item){
                    return Carbon::parse($item->created_at)->format('M');
                });
            $readings_by_month = [];
            foreach($readings as $key => $value){
                $readings_by_month[$key] = $value[0];
            }
            $formatted_readings = [];
            $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            foreach($months as $month){
                $formatted_readings[$month] = array_key_exists($month, $readings_by_month) ? $readings_by_month[$month] : null; 
            }
            return response()->json([
                'readings' => $formatted_readings
            ]);
        }
    }

    private function getStartAndEndDateFromWeek($week, $year){

        $date = Carbon::now();
        $date->setISODate($year, $week);
        $dates = [
            'start' => $date->startOfWeek()->toDateString(),
            'end' => $date->endOfWeek()->toDateString()
        ];
        return $dates;
    }

    private function getStartAndEndDateFromMonth($month, $year){
        $date = Carbon::createFromDate($year, $month);
        $dates = [
            'start' => $date->startOfMonth()->toDateString(),
            'end' => $date->endOfMonth()->toDateString()
        ];
        return $dates;
    }


// FOR ADMIN DASHBOARD DATA//

    // USERS COUNT (BOTH PATIENT/PROFESSIONAL)
    public function getUsersCount(Request $request){
        $users_count = [];
        if(ucwords($request->municipality) == 'All'){
            $users = User::whereNot('type', 'admin')
                ->get()
                ->groupBy('type');
            $municipalities = ['Boac', 'Buenavista', 'Gasan', 'Mogpog', 'Sta. Cruz', 'Torrijos'];
            $patients = $users->has('patient') ? $users['patient']->countBy('municipality')->toArray() : [];
            $professionals = $users->has('professional') ? $users['professional']->countBy('municipality')->toArray() : [];
            foreach($municipalities as $municipalities){
                $key = $municipalities;
                $users_count['patient'][$key] = array_key_exists($key, $patients) ?  $patients[$key] : 0;
                $users_count['professional'][$key] = array_key_exists($key, $professionals) ? $professionals[$key] : 0;
            }
        }
        else{
            $users = User::whereNot('type', 'admin')
                ->where('municipality',ucwords($request->municipality))
                ->get()
                ->groupBy('type');
            if(ucwords($request->municipality) == 'Boac'){
                $barangays = $this->boac_barangays;
            }
            else if(ucwords($request->municipality) == 'Buenavista'){
                $barangays = $this->buenavista_barangays;
            }
            else if(ucwords($request->municipality) == 'Gasan'){
                $barangays = $this->gasan_barangays;
            }
            else if(ucwords($request->municipality) == 'Mogpog'){
                $barangays = $this->mogpog_barangays;
            }
            else if(ucwords($request->municipality) == 'Sta. Cruz'){
                $barangays = $this->sta_cruz_barangays;
            }
            else if(ucwords($request->municipality) == 'Torrijos'){
                $barangays = $this->torrijos_barangays;
            }
            else{
                return response()->json([
                    'users_count' => 'Bad Request'
                ]);
            }
           

            $patients = $users->has('patient') ? $users['patient']->countBy('barangay')->toArray() : [];
            $professionals = $users->has('professional') ? $users['professional']->countBy('barangay')->toArray() : [];
            foreach($barangays as $barangay){
                $key = $barangay;
                $users_count['patient'][$key] = array_key_exists($key, $patients) ?  $patients[$key] : 0;
                $users_count['professional'][$key] = array_key_exists($key, $professionals) ? $professionals[$key] : 0;
            }
        }
        return response()->json([
            'users_count' => $users_count
        ]);
    }

    // FOR USERS LIST//

    public function getUserListInAdminDashboard(){
        $list_users = [];
        $users = User::whereNot('type','admin')->get();
        foreach($users as $user){
            $temp_array = [
                $user->id,
                $user->first_name.' '.$user->last_name.' '.$user->suffix,
                $user->type,
                $user->sex,
                Carbon::parse($user->birthday)->format('M d, Y'),
                $user->barangay.' '.$user->municipality,
                $user->email];
            array_push($list_users, $temp_array);    
        }
        return response()->json([
            'users-list' => $list_users

        ]);
    }

    // public function getProfessionalListInAdminDashboard(Request $request){
    //     $formatted_professionals =[];
    //     $professionals = User::where('type', 'professional')->get();
    //     foreach($professionals as $professional){
    //         $temp_array_professional = [
    //             $professional->id,
    //             $professional->first_name.' '.$professional->last_name.' '.$professional->suffix,
    //             $professional->sex,
    //             Carbon::parse($professional->birthday)->format('M d, Y'),
    //             $professional->barangay.' '.$professional->municipality,
    //             $professional->email];
    //         array_push($formatted_professional, $temp_array);    
    //     }
    //     return response()->json([
    //         'professionals_list' => $formatted_professionals
    //     ]);
    // }
    
} 