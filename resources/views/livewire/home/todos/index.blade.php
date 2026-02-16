@if (count($todos) != 0)
    <div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Delete</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                    <th scope="col" class="px-6 py-3">CreatedAt</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                </tr>
            </thead>
            <tbody
                class="[&>tr:nth-child(odd)]:bg-white [&>tr:nth-child(even)]:bg-gray-100 dark:[&>tr:nth-child(odd)]:bg-slate-700 dark:[&>tr:nth-child(even)]:bg-slate-800">
                @foreach ($todos as $todo)
                    @if (Auth::user()->id == $todo->user_id)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <td>
                                <a class="ms-2 rounded-sm p-2 cursor-pointer border border-red-400 transition-all text-red-400 hover:bg-red-400 hover:text-white text-center ml-1.5""
                                    wire:click="Delete({{ $todo->id }})">delete</a>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                <a href="{{ route('todo.show', ['todo' => $todo->id]) }}"
                                    class="rounded-sm p-2 bg-gray-500 hover:bg-gray-400 transition-all text-white text-center">
                                    show
                                </a>

                                @if ($todo->status)
                                    <a href=""
                                        class="rounded-sm p-2 bg-green-600 transition-all text-white hover:bg-green-500 text-center ml-1.5">
                                        completed
                                    </a>
                                @else
                                    <a wire:click="Completed({{ $todo->id }})"
                                        class="cursor-pointer rounded-sm p-2 bg-blue-500 hover:bg-blue-400 transition-all text-white text-center ml-2 w-20">
                                        Done
                                    </a>
                                @endif
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
                    @endif
                @endforeach
            </tbody>
            {{-- {{ $todos->links('pagination::tailwind') }} --}}
            <th> {{ $todos->links() }}</th>

        </table>
    </div>
@else
    <div>
        <div class="alert alert-danger bg-red-500 text-white p-3">
            تسکی وجود ندارد
        </div>
    </div>

@endif
