<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Reading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function redirectToHomepage(){
        if(Auth::check()){
            return redirect('/dashboard');
        }
        return view('homepage');
    }

    public function redirectToRegisterUser(){
        if(Auth::check()){
            flash()->addError('Please logout first');
            return redirect('/');
        }
        return view('register_user');
    }
    
    public function redirectToRegisterProfessional(){
        if(Auth::check()){
            flash()->addError('Please logout first');
            return redirect('/');
        }
        return view('register_professional');
    }

    public function redirectToDashboard(){
        if(Auth::check()){
            if(Auth::user()->type == 'patient'){
                $user = Auth::user();
                $readings = Reading::where('user_id', $user->id)->latest()->get();
                return view('dashboard_user',[
                    'user' => $user,
                    'readings' => $readings
                ]);
            }
            else if(Auth::user()->type == 'professional'){
                $user = Auth::user();
                $latest_readings = Reading::with('user')->latest()->get()->unique('user_id');
                return view('dashboard_professional', [
                    'user' => $user,
                    'latest_readings' => $latest_readings
                ]);
            }
            else if(Auth::user()->type == 'admin'){
                $user = Auth::user();
                $users = User::where('type', 'patient')->orWhere('type', 'professional')->get();
                $patient_count = User::where('type', 'patient')->count();
                $professional_count = User::where('type', 'professional')->count();
                $latest_users = User::where('type', 'patient')->orWhere('type', 'professional')->latest()->get();
                return view('dashboard_admin', [
                    'user' => $user,
                    'users' => $users,
                    'patient_count' => $patient_count,
                    'professional_count' => $professional_count,
                    'latest_users' => $latest_users
                ]);
               
            }
            else{
                flash()->addError('Unknown User Type');
                return back();
            }
        }
        flash()->addError('Please Login First');
        return redirect('/');
    }
  
    public function redirectToUploadLogin(){
        if(Auth::check()){
            flash()->addError('Please logout first');
            return redirect('/');
        }

        return view('login_upload');
    }

    
    public function redirectToCameraLogin(){
        if(Auth::check()){
            flash()->addError('Please logout first');
            return redirect('/');
        }
        return view('login_camera');
    }

    public function redirectToAdminLogin(){
        if(Auth::check()){
            flash()->addError('Please logout first');
            return redirect('/');
        }
        return view('login_admin');
    }
    public function redirectToPatientsInProfessionalDashboard(Request $request){
        if(Auth::check() && Auth::user()->type == 'professional'){
            $user = Auth::user();
            return view('patients_professional_dashboard', [
                'user' =>$user
            ]);     

        }
    }

    public function redirectToPatientPage(Request $request){
        if(Auth::user()->type == 'professional'){
            if($request->has('user')){
                $user = User::find($request->user);
                $professional = Auth::user();
                $readings= Reading::where('user_id', $user->id)->latest()->get();
                return view('professional_patients',[
                    'user' => $user,
                    'professional' => $professional, 
                    'readings' => $readings
                ]);   
            }
            else{
                flash()->addError('User unidentified');
            }
             
        }
        else{
            flash()->addError('You cannot access this page');
            return back('/');
        }
       
    }

    public function redirectToReadings(){
        if (Auth::check() && Auth::user()->type == 'patient'){
            $user = Auth::user();
            $readings = Reading::where('user_id', Auth::user()->id)->latest()->get();
           
            $now = Carbon::now();
            $week_start = $now->startOfWeek()->toDateString();
            $week_end = $now->endOfWeek()->toDateString();
            $weeklyCount = Reading::where('user_id', Auth::user()->id)->whereBetween('created_at', [$week_start, $week_end])->get()->count();

            $monthlyCount = Reading::where('user_id', Auth::user()->id)->whereMonth('created_at', $now->month)->whereYear('created_at', $now->year)->get()->count();

            $yearlyCount = Reading::where('user_id', Auth::user()->id)->whereYear('created_at', $now->year)->get()->count();
            
            return view('user_readings', [
                'user'=> $user,
               
                'readings' => $readings,
                'weeklyCount' => $weeklyCount,
                'monthlyCount' => $monthlyCount,
                'yearlyCount' => $yearlyCount
            ]);
        }

        flash()->addError('Please Login as a Patient');
        return redirect('/');
    }

    public function redirectToProfessionalReadings(){
        if (Auth::check() && Auth::user()->type == 'professional'){
            $user = Auth::user();
            $readings = Reading::where('user_id', Auth::user()->id)->latest()->get();
            $now = Carbon::now();
            $week_start = $now->startOfWeek()->toDateString();
            $week_end = $now->endOfWeek()->toDateString();
            $weeklyCount = Reading::where('user_id', Auth::user()->id)->whereBetween('created_at', [$week_start, $week_end])->get()->count();

            $monthlyCount = Reading::where('user_id', Auth::user()->id)->whereMonth('created_at', $now->month)->whereYear('created_at', $now->year)->get()->count();

            $yearlyCount = Reading::where('user_id', Auth::user()->id)->whereYear('created_at', $now->year)->get()->count();
            
            return view('professional_readings', [
                'user'=> $user,
                'readings' => $readings,
                'weeklyCount' => $weeklyCount,
                'monthlyCount' => $monthlyCount,
                'yearlyCount' => $yearlyCount
            ]);
        }

        flash()->addError('Please Login as a Professional');
        return redirect('/');
    }

    public function redirectToPatientReadings(Request $request){
        $user = User::find($request->user);
        $professional = Auth::user();
        $readings = Reading::where('user_id', Auth::user()->id)->latest()->get();
       
        $now = Carbon::now();
        $week_start = $now->startOfWeek()->toDateString();
        $week_end = $now->endOfWeek()->toDateString();
        $weeklyCount = Reading::where('user_id', Auth::user()->id)->whereBetween('created_at', [$week_start, $week_end])->get()->count();

        $monthlyCount = Reading::where('user_id', Auth::user()->id)->whereMonth('created_at', $now->month)->whereYear('created_at', $now->year)->get()->count();

        $yearlyCount = Reading::where('user_id', Auth::user()->id)->whereYear('created_at', $now->year)->get()->count();
        
        return view('patient_readings', [
            'user'=> $user,
            'professional' => $professional,
            'readings' => $readings,
            'weeklyCount' => $weeklyCount,
            'monthlyCount' => $monthlyCount,
            'yearlyCount' => $yearlyCount
        ]);
    }
    
}
