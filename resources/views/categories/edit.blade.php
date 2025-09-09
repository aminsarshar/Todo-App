@extends('layouts.master')
@section('content')
<div
    class="rounded-xl border border-gray-300 relative overflow-x-auto w-[80%] my-10 mx-auto"
    style="direction: ltr"
>
    <div class="flex justify-between border-b border-b-gray-300 p-4 bg-gray-100">
        <span class="font-bold text-xl">Edit Category</span>
        <a
            href="{{route('category.index')}}"
            class="rounded-sm bg-gray-800 hover:bg-gray-600 transition-all text-white w-22 text-center h-8 pt-1"
            >back</a
        >
    </div>
    <form class="m-5" action="{{route('category.update' , ['category' => $category->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div>Title</div>
        <input name="title" value="{{$category->title}}" type="text" class="input-create w-full h-9 border border-gray-200 rounded-md focus-visible:outline-gray-300 pl-2"/>
        <div class="text-sm text-red-700 mb-5 mt-2">@error('title') {{$message}} @enderror</div>
        <button
            type="submit"
            class="rounded-lg p-2 transition-all bg-gray-500 text-white hover:bg-gray-400 text-center"
            >Submit</button
        >
    </form>
</div>

@endsection
