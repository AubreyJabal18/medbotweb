<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectToHomepage(){
        $string = 'rerere';
        return view('welcome',[
            'string1' => $string
        ]);
    }
    public function redirectToCameraLogin(){
        return view('cameralogin');
    }
    public function redirectToUploadLogin(){
        return view('uploadlogin');
    }
}
