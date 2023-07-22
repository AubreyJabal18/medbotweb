<?php

namespace App\Http\Controllers;

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
                $readings = Reading::where('user_id', 1)->latest()->get();
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
}
