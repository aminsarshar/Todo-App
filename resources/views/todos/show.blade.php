@extends('layouts.master') @section('content')
    <div class="rounded-xl border border-gray-300 relative overflow-x-auto w-[80%] my-10 mx-auto" style="direction: ltr">
        <div class="flex justify-between border-b border-b-gray-300 p-4 bg-gray-100">
            <span class="font-bold text-xl">Show Todo</span>
            <a href="{{ route('todo.index') }}"
                class="rounded-sm bg-gray-800 hover:bg-gray-600 transition-all text-white w-22 text-center h-8 pt-1">back</a>
        </div>
        <form class="m-5" action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-4">
                    <div>Image</div>
                    <div class="w-40 border border-gray-200 rounded-md">
                        <img class="rounded-b-md w-40" src="{{ asset('images/' . $todo->image) }}" alt="" />
                    </div>
                </div>
                <div>
                    <div>Title</div>
                    <input value="{{ $todo->title }}" type="text" disabled
                        class="input-create mt-3 w-full h-9 border bg-gray-100 mb-4 border-gray-200 rounded-md focus-visible:outline-gray-300 pl-2" />
                </div>
                <div>
                    <div>Category</div>
                    <input value="{{ $todo->category->title }}" type="text" disabled
                        class="input-create mt-3 w-full h-9 border bg-gray-100 mb-4 border-gray-200 rounded-md focus-visible:outline-gray-300 pl-2" />
                </div>
                <div>
                    <div>Status</div>
                    <input value="{{ $todo->status ? 'completed' : 'doing...' }}" type="text" disabled
                        class="input-create mt-3 w-full h-9 border bg-gray-100 mb-4 border-gray-200 rounded-md focus-visible:outline-gray-300 pl-2" />
                </div>
                <div class="col-span-4">
                    <div>Description</div>
                    <textarea rows="10" cols="20" disabled
                        class="input-create mt-3 w-full h-24 border bg-gray-100 mb-4 border-gray-200 rounded-md focus-visible:outline-gray-300 pl-2">{{ $todo->description }}</textarea>
                </div>
            </div>
            <div class="flex">
                <form action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="ms-2 rounded-sm p-2 border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5">Delete</button>
                </form>
                <a href=""
                    class="rounded-sm ms-2 p-2 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white transition-all text-center">Edit</a>
            </div>
        </form>
    </div>
@endsection
