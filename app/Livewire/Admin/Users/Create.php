<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|unique:users,email')]
    public $email;

    #[Rule('required|unique:users,cellphone')]
    public $cellphone;

    #[Rule('required|min:6')]
    public $password;


    public function saveUser(){

        $this->validate();

        $user = User::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'cellphone' => $this->cellphone,
            'password' => Hash::make($this->password),
        ]);

        $this->reset('name','email','cellphone','password');

        flash()->success('Profile updated successfully!', [
    'timeout' => 10000,       // Display for 10 seconds
    'position' => 'top-center ',
    'closeButton' => true,
]);

        // return redirect()->back();
    }

    public function render()
    {

        return view('livewire.admin.users.create');
    }
}
