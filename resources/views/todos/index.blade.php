@extends('layouts.master')
@section('content')
    <div class="rounded-xl border border-gray-300 dark:border-gray-500 relative overflow-x-auto w-[80%] my-10 mx-auto">
        <div class="flex justify-between border-b border-b-gray-300 dark:border-b-gray-500 p-4 bg-gray-100 dark:bg-gray-800">
            <a href="{{ route('todo.create') }}"
                class="rounded-sm bg-gray-800 dark:bg-slate-600 hover:bg-slate-800 transition-all text-white w-22 text-center h-8">create</a>
            <span class="text-slate-800 dark:text-slate-300 font-bold text-xl">ToDo</span>
        </div>
        <livewire:home.todos.index />


    </div>
@endsection
