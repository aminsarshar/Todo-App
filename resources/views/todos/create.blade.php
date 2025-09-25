@extends('layouts.master')
@section('content')
    <div class="rounded-xl border border-gray-300 dark:border-gray-500 relative overflow-x-auto w-[80%] my-10 mx-auto " style="direction: ltr">
        <div class="flex justify-between border-b border-b-gray-300 dark:border-b-gray-500 p-4 bg-gray-100 dark:bg-gray-800">
            <span class="font-bold text-xl text-slate-800 dark:text-slate-300">Create Todo</span>
            <a href="{{ route('todo.index') }}"
                class="rounded-sm bg-gray-600 hover:bg-gray-700 transition-all text-white w-22 text-center h-8 pt-1">back</a>
        </div>
        <form class="m-5" action="{{route('todo.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text-slate-900 dark:text-slate-200">Image</div>
            <input name="image" type="file"
                class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-400 pl-2" />
            <div class="text-sm text-red-700 mb-5 mt-2">
                @error('image')
                    {{ $message }}
                @enderror
            </div>
            <div class="text-slate-900 dark:text-slate-200">Title</div>
            <input name="title" type="text"
                class="text-slate-900 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-500 pl-2" />
            <div class="text-sm text-red-700 mb-5 mt-2">
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="text-slate-900 dark:text-slate-200">Category</div>
            <select name="category_id" class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-500 pl-2">
                @foreach ($categories as $category)
                <option class="text-slate-900 dark:text-slate-200" value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <div class="text-sm text-red-700 mb-5 mt-2">
                @error('category_id')
                    {{ $message }}
                @enderror
            </div>
             <div class="text-slate-900 dark:text-slate-200">Description</div>
             <textarea name="description" rows="10" class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-24 border  border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 pl-2"></textarea>
            <div class="text-sm text-red-700 mb-5 mt-2">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit"
                class="rounded-lg p-2 transition-all bg-gray-500 text-white hover:bg-gray-400 text-center">Submit</button>
        </form>
    </div>
@endsection
