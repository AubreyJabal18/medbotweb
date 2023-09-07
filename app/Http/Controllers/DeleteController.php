<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DeleteController extends Controller
{
    public function deleteUser(Request $request){
        $user = User::find($request->id);
       
        $user->delete();
     
        flash()->addSuccess('User has been Deleted Successfully!');
    
        return redirect('/');
    }

    public function restoreUser(Request $request){
        $user = User::withTrashed()->find($request->id);
        $user->restore();
     
        flash()->addSuccess('User has been Restored Successfully!');
    
        return redirect('/');
    }


}
