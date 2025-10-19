<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    // protected $paginationTheme = "tailwind";
    public $search;

    public $editUserIndex = null;


    public function render()
    {
        $users = User::query()
        ->where('name', 'like' , '%'.$this->search.'%')
        ->orWhere('email', 'like' , '%'.$this->search.'%')
        ->orWhere('cellphone', 'like' , '%'.$this->search.'%')
        ->paginate(7);
        return view('livewire.admin.users.index' , compact('users'));
    }
}
