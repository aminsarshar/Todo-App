<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function logout(Request $request)
    {
        $user = User::query()->find($request);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        flash()->success('Logout was successful');
    }
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
