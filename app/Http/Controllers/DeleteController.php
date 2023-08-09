<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DeleteController extends Controller
{
    public function deleteUser(Request $request){
        dd($request->all());
        $user = User::find($request->id);
       
        $user->delete();
     
        flash()->addSuccess('User has been Deleted Successfully!');
    
        return redirect('/');
    }


}
