<?php

namespace App\Livewire\Home\Todos;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function Completed($id)
    {
        $todo = Todo::query()->find($id);
        $todo->update([
            'status' => 1
        ]);
        flash()->success('تسک مورد نظر با موفقیت آپدیت شد');
        // return redirect()->route('todo.index');

    }

    public function Delete($id)
    {
        $todo = Todo::query()->find($id);
        $todo->delete();
        flash()->success('تسک مورد نظر با موفقیت حذف شد');
    }

    public function render()
    {
        $todos = Todo::query()->paginate(4);
        $categories = Category::all();
        return view('livewire.home.todos.index', compact('todos', 'categories'));
    }
}
