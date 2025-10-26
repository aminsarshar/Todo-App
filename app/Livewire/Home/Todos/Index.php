<?php

namespace App\Livewire\Home\Todos;

use App\Models\Todo;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $todos = Todo::query()->paginate(4);
        $categories = Category::all();
        return view('livewire.home.todos.index' , compact('todos' , 'categories'));
    }
}
