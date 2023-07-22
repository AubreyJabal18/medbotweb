<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfDashboardController extends Controller
{
    public function getUserInfo(Request $request){
        dd($request->all());
        }

    
}
