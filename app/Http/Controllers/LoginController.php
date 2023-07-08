<?php

namespace App\Http\Controllers;

use Libern\QRCodeReader\QRCodeReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginByUpload(Request $request){
      
        $QRCodeReader = new QRCodeReader();
        $qrcode_text = $QRCodeReader->decode($request->file('qrcode'));
        $qrcode_data = explode(' ', $qrcode_text);
        $type = $qrcode_data[0];

        if($type != 'medbot'){
            flash()->addError('Invalid QRCode');
            return back();
        }

        $id = $qrcode_data[1];
        $password = $qrcode_data[2];

        $credentials = [
            'id' => $id,
            'password' => $password
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            flash()->addSuccess('Login successfully');
            return redirect()->intended('dashboard');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        flash()->addSuccess('Logout successfully');
        return redirect('/');
    }

}
