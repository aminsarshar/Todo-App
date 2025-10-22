<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function forgetPassword()
    {
        return view('auth.forget-password');
    }

    public function forgetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);

        $email = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if ($email) {
            return redirect()->back()->with('error', 'Password forgotten email has already been sent');
        }

        $token = str()->random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Rest Password');
        });

        return redirect()->back()->with('success', 'We have send an email to rest password');
    }

    public function resetPassword($token)
    {
        return view('auth.reset-password', compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);

        $passwordReset = DB::table('password_reset_tokens')->where([
            'token' => $request->token,
        ])->first();

        if (!$passwordReset) {
            return redirect()->back()->with('error', 'Invail Data');
        }

        $user = User::where('email', $passwordReset->email);
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_reset_tokens')->where([
            'token' => $request->token,
        ])->delete();
        return redirect()->route('login');
    }
}
