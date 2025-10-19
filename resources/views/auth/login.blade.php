@extends('layouts.master') @section('content')
    <div class="rounded-xl border border-gray-300 dark:border-gray-500 relative overflow-x-auto w-[50%] my-10 mx-auto"
        style="direction: ltr">
        <div class="flex justify-between border-b border-b-gray-300 dark:border-b-gray-500 p-4 bg-gray-100 dark:bg-gray-800">
            <span class="font-bold text-xl text-slate-800 dark:text-slate-300">Login</span>
            <a href="{{ route('register') }}"
                class="rounded-sm bg-gray-600 hover:bg-gray-700 transition-all text-white w-22 text-center h-8 pt-1">Register</a>
        </div>
        
    </div>
@endsection
