<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    public function registerUser(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'suffix' => 'nullable',
            'sex' => 'required',
            'birthday' => 'required',
            'municipality' => 'required',
            'barangay' => 'required',
            'contact' => 'required',
            'email' => 'required|email|unique:users,email',
        ],
        [
            'first_name.required' => 'First name is required',
            'first_name.alpha' => 'First name should only contain letters',
            'last_name.required' => 'First name is required',
            'last_name.alpha' => 'First name should only contain letters',
            'sex.required' => 'Select a sex',
            'birthday.required' => 'Birthday is required',
            'municipality.required' => 'Municipality is required',
            'barangay.required' => 'Barangay is required',
            'contact.required' => 'Contact number is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists'
        ]);
        if($validator->fails()){
            foreach($validator->messages()->all() as $message){
                flash()->addError($message);
            }
            return back()->withInput();
        }

        $password = Str::random(12);
        $user_form = [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'suffix' => $request->suffix,
            'honorific' => null,
            'type' => 'patient',
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'municipality' => $request->municipality,
            'barangay' => $request->barangay,
            'email' => $request->email,
            'license' => null,
            'password' => bcrypt($password),
            'profile' => $request->profile
        ];

        $user = User::create($user_form);

        $data = $user->id.' '.$password;
        $path = '../public/qrcodes/'.$user->id.'.png';

        $qrcode = QrCode::size(120)->margin(1)->format('png')->generate($data, $path);

        flash()->addSuccess('Registered Successfully');
        return redirect('/dashboard')->with([
            'id' => $user->id
        ]);
    }
}
