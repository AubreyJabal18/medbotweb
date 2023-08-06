<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteUser(Request $request){
        $user = User::find($request->id);
        $user->delete();
        flash()->addSuccess('User Deleted Successfully!');
        return redirect('/');
    }
}
