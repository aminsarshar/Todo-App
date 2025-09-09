<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::query()->get();
        $categories = Category::all();
        return view('todos.index', compact('todos', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('todos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|max:2000|image',
            'title' => 'requ ired',
            'description' => 'required',
            'category_id' => 'required|integer',
        ]);

        $filename = time() . '_' . $request->image->getClientOriginalName();
        $request->image->storeAs('/images', $filename);

        Todo::create([
            'image' => $filename,
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        flash()->success('تسک مورد نظر با موفقیت اضافه شد');

        return redirect()->route('todo.index');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function completed(Todo $todo)
    {
        $todo->update([
            'status' => 1
        ]);
        flash()->success('تسک مورد نظر با موفقیت آپدیت شد');

        return redirect()->route('todo.index');
    }

    public function edit(Todo $todo)
    {
        $categories = Category::query()->get();
        return view('todos.edit', compact('todo', 'categories'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'image' => 'nullable|max:2000|image',
            'title' => 'requ ired',
            'description' => 'required',
            'category_id' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('/images/' . $todo->image);
            $filename = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('/images', $filename);
        }

        $todo->update([
            'image' => $request->hasFile('image') ? $filename : $todo->image,
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        flash()->success('تسک مورد نظر با موفقیت ویرایش شد');
        return redirect()->route('todo.index');
    }
}
