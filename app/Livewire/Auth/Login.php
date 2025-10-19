<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{

     public $email;
    public $password;

    public $showModal = false; // وضعیت نمایش مودال

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function openModal()
    {
        $this->resetValidation();
        $this->reset(['email', 'password']);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function loginUser()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if (! $user || ! Hash::check($this->password, $user->password)) {
            $this->addError('email', 'ایمیل یا رمز عبور اشتباه است.');
            return;
        }

        Auth::login($user);
        flash()->success('ورود با موفقیت انجام شد.');

        return redirect()->route('todo.index');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
