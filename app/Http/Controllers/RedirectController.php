<?php

namespace App\Http\Controllers;

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
        return view('register_user');
    }
    
    public function redirectToRegisterProfessional(){
        return view('register_professional');
    }

    public function redirectToDashboard(){
        if(Auth::check()){
            if(Auth::user()->type == 'patient'){
                return view('dashboard');
            }
            else if(Auth::user()->type == 'professional'){
                return view('dashboard_professional');
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
        return view('login_upload');
    }

    
    public function redirectToCameraLogin(){
        return view('login_camera');
    }
}
