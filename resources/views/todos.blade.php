@extends('layouts.master')
@section('content')
    <div class="rounded-xl border border-gray-300 relative overflow-x-auto w-[80%] my-10 mx-auto">
        <div class="flex justify-between border-b border-b-gray-300 p-4 bg-gray-100">
            <a href="{{route('todo.create')}}"
                class="rounded-sm bg-gray-800 hover:bg-gray-600 transition-all text-white w-22 text-center h-8">create</a>
            <span class="font-bold text-xl">ToDo</span>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Color</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="" class="rounded-sm p-2 bg-gray-500 hover:bg-gray-400 transition-all text-white text-center">show</a>
                        <a href="" class="rounded-sm p-2 border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5">completed</a>
                    </th>
                    <td class="px-6 py-4">Silver</td>
                    <td class="px-6 py-4">Laptop</td>
                    <td class="px-6 py-4">$2999</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="" class="rounded-sm p-2 bg-gray-500 hover:bg-gray-400 transition-all text-white text-center">show</a>
                    <a href="" class="rounded-sm p-2 bg-sky-500 hover:bg-sky-400 transition-all text-white text-center ml-1.5">Done</a>
                    </th>
                    <td class="px-6 py-4">White</td>
                    <td class="px-6 py-4">Laptop PC</td>
                    <td class="px-6 py-4">$1999</td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="" class="rounded-sm p-2 bg-gray-500 hover:bg-gray-400 transition-all text-white text-center">show</a>
                        <a href="" class="rounded-sm p-2 border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5">completed</a>
                    </th>
                    <td class="px-6 py-4">Black</td>
                    <td class="px-6 py-4">Accessories</td>
                    <td class="px-6 py-4">$99</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
