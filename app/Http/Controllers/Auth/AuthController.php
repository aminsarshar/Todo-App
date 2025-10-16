<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if(!$user) {
            return redirect()->back()->with('error', 'Registration failed, try again');
        }

        return redirect()->route('todo.index')->with('success', 'Registration success, login to access the app');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:5',

        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            flash()->error('User with this email address was not found..');
            return redirect()->back();
        }

        if (!Hash::check($request->password, $user->password)) {
            flash()->error('User with this password is wrong ..');
            return redirect()->back();
        }

        Auth::login($user);
        flash()->success('Login was successful');
        return redirect()->route('todo.index');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        flash()->success('Logout was successful');
        return redirect()->route('todo.index');
    }
}
