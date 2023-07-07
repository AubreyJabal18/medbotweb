<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectToHomepage(){
        return view('homepage');
    }

    public function redirectToCameraLogin(){
        return view('cameralogin');
    }

    public function redirectToRegisterUser(){
        return view('register_user');
    }
    
    public function redirectToRegisterProfessional(){
        return view('register_professional');
    }

    public function redirectToRegisterProfessional(){
        return view('register_professional');
    }

    public function redirectToDashboard(){
        return view('dashboard');
    }
  
    public function redirectToUploadLogin(){
        return view('uploadlogin');
    }
}
