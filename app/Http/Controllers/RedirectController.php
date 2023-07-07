<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectToHomepage(){
        return view('homepage');
    }

    public function redirectToCameraLogin(){
        return view('login_camera');
    }
    public function redirectToUploadLogin(){
        return view('login_upload');
    }
}
