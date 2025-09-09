<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos');
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
}
