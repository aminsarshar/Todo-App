<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::query()->get();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Category::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,

        ]);

        // toastr()->success('Data has been saved successfully!');
        flash()->success('create category successfully.');

        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $category->update([
            'title' => $request->title,

        ]);
        flash()->success('edit category successfully.');

        return redirect()->route('category.index');
    }

        public function destroy(Request $request, Category $category)
    {
        $category->delete();

        flash()->success('delete category successfully.');

        return redirect()->route('category.index');
    }
}
