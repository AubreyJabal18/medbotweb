<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Traits\Upload;

class RegisterController extends Controller
{

    use Upload;

    public function registerUser(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'suffix' => 'nullable',
            'sex' => 'required',
            'birthday' => 'required|before:now',
            'municipality' => 'required',
            'barangay' => 'required',
            'contact' => 'required|regex:/^(09)\d{9}$/',
            'email' => 'required|email|unique:users,email',
            'profile' => 'nullable|mimes:jpg,jpeg,png'
        ],
        [
            'first_name.required' => 'First name is required',
            'first_name.alpha' => 'First name should only contain letters',
            'last_name.required' => 'Last name is required',
            'last_name.alpha' => 'Last name should only contain letters',
            'suffix.alpha' => 'Suffix should only contain letters',
            'sex.required' => 'Select your sex',
            'birthday.required' => 'Birthdate is required',
            'birthday.before' => 'Invalid date',
            'municipality.required' => 'Municipality is required',
            'barangay.required' => 'Barangay is required',
            'contact.required' => 'Contact number is required',
            'contact.regex' => 'Invalid contact number format',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
            'profile.mimes' => 'Invalid picture format'
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
            'password' => bcrypt($password)
        ];

        $user = User::create($user_form);

        if($request->hasFile('profile')){
            $profile_path = $this->UploadFile($request->file('profile'), $user->id, 'profiles');
            $user->profile = $profile_path;
            $user->save();
        }

        $data = 'medbot'.$user->id.' '.$password;
        $path = '../public/storage/qrcodes/'.$user->id.'.png';

        $qrcode = QrCode::size(120)->margin(1)->format('png')->generate($data, $path);

        flash()->addSuccess('Registered Successfully');
        return redirect('/dashboard')->with([
            'id' => $user->id
        ]);
    }

    public function registerProfessional(Request $request){
        $validator = Validator::make($request->all(),[
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'suffix' => 'nullable',
            'honorific' => 'required|alpha',
            'sex' => 'required',
            'birthday' => 'required|before:now',
            'municipality' => 'required',
            'barangay' => 'required',
            'contact' => 'required|regex:/^(09)\d{9}$/',
            'email' => 'required|email|unique:users,email',
            'license' => 'required|unique:users,license',
            'profile' => 'nullable|mimes:jpg,jpeg,png'
        ],
        [
            'first_name.required' => 'First name is required',
            'first_name.alpha' => 'First name should only contain letters',
            'last_name.required' => 'Last name is required',
            'last_name.alpha' => 'Last name should only contain letters',
            'suffix.alpha' => 'Suffix should only contain letters',
            'honorific.alpha' => 'Honorific is required',
            'sex.required' => 'Select your sex',
            'birthday.required' => 'Birthdate is required',
            'birthday.before' => 'Invalid date',
            'municipality.required' => 'Municipality is required',
            'barangay.required' => 'Barangay is required',
            'contact.required' => 'Contact number is required',
            'contact.regex' => 'Invalid contact number format',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
            'license.unique' => 'License number is required',
            'profile.mimes' => 'Invalid picture format'
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
            'honorific' => $request->honorific,
            'type' => 'professional',
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'municipality' => $request->municipality,
            'barangay' => $request->barangay,
            'email' => $request->email,
            'license' => $request->license,
            'password' => bcrypt($password)
        ];

        $user = User::create($user_form);

        if($request->hasFile('profile')){
            $profile_path = $this->uploadFile($request->file('profile'), $user->id, 'profiles', 'public');
            $user->profile = $profile_path;
            $user->save();
        }

        $data = 'medbot'.$user->id.' '.$password;
        $path = '../public/storage/qrcodes/'.$user->id.'.png';

        $qrcode = QrCode::size(120)->margin(1)->format('png')->generate($data, $path);

        flash()->addSuccess('Registered Successfully');
        return redirect('/dashboard')->with([
            'id' => $user->id
        ]);
    }
}
