<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Traits\Upload;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    use Upload;

    public function updatePatient(Request $request)
    {   
        $user = User::find($request->id);
        $validator = Validator::make($request->all(), [
        'first_name' => 'required|regex:/^[a-zA-Z ]+$/',
        'last_name' => 'required|regex:/^[a-zA-Z ]+$/',
        'suffix' => 'nullable',
        'sex' => 'required',
        'birthday' => 'required|before:now',
        'municipality' => 'required',
        'barangay' => 'required',
        'contact_number' => 'required|regex:/^(09)\d{9}$/',
        'email' => 'required|email|unique:users,email,'.$user->id,
        'profile' => 'nullable|mimes:jpg,jpeg,png'
    ],
    [
        'profile.mimes' => 'Invalid picture format'
    ]);
   

    if($validator->fails()){
        foreach($validator->messages()->all() as $message){
            flash()->addError($message);
        }
        return back()->withInput();
    };

    if($request->hasFile('profile')){
        $profile_path = $this->uploadFile($request->file('profile'), $user->id, 'profiles');
        $user->profile = $profile_path;
    }
        
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->suffix = $request->suffix;
    $user->sex = $request->sex;
    $user->birthday = $request->birthday;
    $user->municipality = $request->municipality;
    $user->barangay = $request->barangay;
    $user->contact_number = $request->contact_number;
    $user->email = $request->email;

    $user->save();

    flash()->addSuccess('Your information has been updated.');
    return redirect('/');
    
    }

    public function updateProfessional(Request $request) 
    {   
        $user = User::find($request->id);

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|regex:/^[a-zA-Z ]+$/',
            'last_name' => 'required|regex:/^[a-zA-Z ]+$/',
            'suffix' => 'nullable',
            'sex' => 'required',
            'birthday' => 'required|before:now',
            'municipality' => 'required',
            'barangay' => 'required',
            'contact_number' => 'required|regex:/^(09)\d{9}$/',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'license' => 'required|unique:users,license,'.$user->id,
            'profile' => 'nullable|mimes:jpg,jpeg,png'
        ],
        [
            'profile.mimes' => 'Invalid picture format'
        ]);
  
        if($validator->fails()){
            foreach($validator->messages()->all() as $message){
                flash()->addError($message);
            }
            return back()->withInput();
        };

        if($request->hasFile('profile')){
            $profile_path = $this->uploadFile($request->file('profile'), $user->id, 'profiles');
            $user->profile = $profile_path;
            $user->save();
        }
    
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->suffix = $request->suffix;
        $user->sex = $request->sex;
        $user->birthday = $request->birthday;
        $user->municipality = $request->municipality;
        $user->barangay = $request->barangay;
        $user->contact_number = $request->contact_number;
        $user->email = $request->email;
        $user->license = $request->license;
   

        $user->save();

        flash()->addSuccess('Your information has been updated.');
        return redirect('/');

    }   

}

// $user = Auth::user();
    
// // Validate and update user information as needed
// $validatedData = $request->validate([
//     'first_name' => 'required|regex:/^[a-zA-Z ]+$/',
//     'last_name' => 'required|regex:/^[a-zA-Z ]+$/',
//     'suffix' => 'nullable',
//     'sex' => 'required',
//     'birthday' => 'required|before:now',
//     'municipality' => 'required',
//     'barangay' => 'required',
//     'contact' => 'required|regex:/^(09)\d{9}$/',
//     'email' => 'required|email|unique:users,email',
//     'profile' => 'nullable|mimes:jpg,jpeg,png'
// ],
// [
//     'profile.mimes' => 'Invalid picture format'
// ]);

// if($validator->fails()){
//     foreach($validator->messages()->all() as $message){
//         flash()->addError($message);
//     }
//     return back()->withInput();
// };

// $user_form = [
//     'last_name' => $request->last_name,
//     'first_name' => $request->first_name,
//     'suffix' => $request->suffix,
//     'honorific' => null,
//     'type' => 'patient',
//     'sex' => $request->sex,
//     'birthday' => $request->birthday,
//     'municipality' => $request->municipality,
//     'barangay' => $request->barangay,
//     'email' => $request->email,
//     'license' => null,
//     'password' => bcrypt($password)
// ];

// $user = User::create($user_form);
// $user->save();

// if($request->hasFile('profile')){
//     $profile_path = $this->uploadFile($request->file('profile'), $user->id, 'profiles', 'public');
//     $user->profile = $profile_path;
//     $user->save();
// }

// $user->update($validatedData);

// flash()->addSuccess('Your information has been updated.');
// return redirect('patients_professional_dashboard'); 