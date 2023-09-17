<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RetrieveController extends Controller
{
    public function checkSecurityQuestion(Request $request)
    {
        $user = User::where('id_number', $request->id_number)->first();

        if (!$user) {
        flash()->addError('Invalid User');
        return redirect()->back();
        }

        if ($user->question != $request->question || $user->answer != $request->answer) {
        flash()->addError('Security question or answer is incorrect');
        return redirect()->back();
        }

        // Construct the correct file path using user's ID
        $path = public_path('storage/qrcodes/' . $user->id . '.png');

        if (file_exists($path)) {
            flash()->success('QR Code retrieved Successfully');
            return response()->download($path);
        } else {
            flash()->error('QR Code not found');
            return redirect()->back();
        }
    }
}
