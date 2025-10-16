<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::query()->paginate(7);
        return view('livewire.admin.users.index' , compact('users'));
    }
}
