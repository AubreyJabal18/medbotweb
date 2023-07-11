<?php

namespace App\Http\Controllers;

use Libern\QRCodeReader\QRCodeReader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private function decrypt($encrypted) {
        $password = 'medbot';
        $decrypted=openssl_decrypt($encrypted,'AES-128-ECB',$password);
        return $decrypted;
    }
    
    private function authenticateQRCodeData($data){
        if(str_contains($data,'medbot')) {
            $qrcode_data = explode(':',$data);

            $id = $qrcode_data[1];
            $password = $qrcode_data[2];

            $credentials = [
                'id' => $id,
                'password' => $password
            ]; 
            return $credentials;
        }
        else{
            return false;
        }

    }

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
     

    public function loginByCamera(Request $request){  
          
        $qrdata = $request->qrcode;
        $decrypted = $this->decrypt($qrdata);
        $credentials = $this->authenticateQRCodeData($decrypted);
        if(!$credentials){
            flash()->addError('Invalid QR Code');
            return redirect()->back();
        }

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            flash()->addSuccess('Login successfully');
            return redirect()->intended('dashboard');
        }
        else {
            flash()->addError('SORRY, your credentials does not match in our records.');
            return back();
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
