@extends('layouts.master')
@section('content')
    <div class="rounded-xl border border-gray-300 dark:border-gray-500 relative overflow-x-auto w-[80%] my-10 mx-auto">
        <div class="flex justify-between border-b border-b-gray-300 dark:border-b-gray-500 p-4 bg-gray-100 dark:bg-gray-800">
            <a href="{{ route('category.create') }}"
                class="rounded-sm bg-gray-800 dark:bg-slate-600 hover:bg-slate-800 transition-all text-white w-22 text-center h-8">create</a>
            <span class="text-slate-800 dark:text-slate-300 font-bold text-xl">Categories</span>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">CreatedAt</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                </tr>
            </thead>
            <tbody class="[&>tr:nth-child(odd)]:bg-white [&>tr:nth-child(even)]:bg-gray-100 dark:[&>tr:nth-child(odd)]:bg-slate-700 dark:[&>tr:nth-child(even)]:bg-slate-800">
                @foreach ($categories as $category)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td>
                            <span class="rounded-md bg-cyan-600 text-white p-2">
                                {{ verta($category->created_at)->format('Y.m.d') }}
                            </span>
                        </td>
                        <th scope="row"
                            class="flex justify-end px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <form action="{{ route('category.destroy', ['category' => $category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="ms-2 rounded-sm p-2 border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5">Delete</button>
                            </form>
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}"
                                class="rounded-sm p-2 border border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-white transition-all text-center">Edit</a>
                        </th>

                        <td class="px-6 py-4 text-base">{{ $category->title }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
