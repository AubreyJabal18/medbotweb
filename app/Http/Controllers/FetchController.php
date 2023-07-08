<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FetchController extends Controller
{
    public function getQrCode(Request $request){
        $path = '../public/storage/qrcodes/'.$request->id.'.png';
        return response()->download($path);
    }
}
