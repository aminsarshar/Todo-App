@extends('layouts.master')
@section('content')
    <div class="rounded-xl border border-gray-300 relative overflow-x-auto w-[80%] my-10 mx-auto">
        <div class="flex justify-between border-b border-b-gray-300 p-4 bg-gray-100">
            <a href="{{ route('todo.create') }}"
                class="rounded-sm bg-gray-800 hover:bg-gray-600 transition-all text-white w-22 text-center h-8">create</a>
            <span class="font-bold text-xl">ToDo</span>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Action</th>
                    <th scope="col" class="px-6 py-3">CreatedAt</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="{{route('todo.show' , ['todo' => $todo->id])}}"
                                class="rounded-sm p-2 bg-gray-500 hover:bg-gray-400 transition-all text-white text-center">show</a>
                            <a href=""
                                class="rounded-sm p-2 border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5">completed</a>
                        </th>
                        <td>
                            <span class="rounded-md bg-cyan-600 text-white p-2">
                                {{ verta($todo->created_at)->format('Y.m.d') }}
                            </span>
                        </td>
                        <td class="px-6 py-4">{{ $todo->category->title }}</td>
                        <td class="px-6 py-4">{{ $todo->title }}</td>
                        <td class="flex justify-end px-6 py-4"><img class="rounded-md w-24"
                                src="{{ asset('images/' . $todo->image) }}" alt=""></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
