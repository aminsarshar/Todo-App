<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users,email')]
    public $email;


    #[Rule('required|min:6')]
    public $password;
    public function registerUser()
    {
        $this->validate();

        $user = User::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset('name', 'email' , 'password');

        flash()->success('Profile updated successfully!', [
            'timeout' => 10000,       // Display for 10 seconds
            'position' => 'top-center ',
            'closeButton' => true,
        ]);

        return redirect()->route('todo.index');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
