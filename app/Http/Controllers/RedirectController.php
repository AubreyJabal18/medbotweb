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
}
