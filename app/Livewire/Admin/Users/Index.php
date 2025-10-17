<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    // protected $paginationTheme = "bootstrap";
    public $search;

    public function render()
    {
        $users = User::query()
        ->where('name', 'like' , '%'.$this->search.'%')
        ->orWhere('email', 'like' , '%'.$this->search.'%')
        ->orWhere('cellphone', 'like' , '%'.$this->search.'%')
        ->paginate(10);
        return view('livewire.admin.users.index' , compact('users'));
    }
}
