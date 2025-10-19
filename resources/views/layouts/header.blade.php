<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    <title>todo-app</title>
</head>

<body class="bg-white dark:bg-slate-700" style="direction:rtl ; font-family:system-ui;">
    <nav class="bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-300" style="direction: ltr">
        <div class="flex p-2 mr-32 justify-between">
            <div class="flex">
                <a href="{{ route('todo.index') }}" class="p-3 font-bold text-2xl">Todo App</a>
                <ul class="flex justify-start p-4">
                    <a href="{{ route('todo.index') }}">
                        <li class="mr-8 hover:text-slate-500 dark:hover:text-slate-400 transition-opacity text-lg">
                            Home
                        </li>
                    </a>
                    <a href="{{ route('category.index') }}">
                        <li class="mr-8 hover:text-slate-500 dark:hover:text-slate-400 transition-opacity text-lg">
                            Category
                        </li>

                </ul>

            </div>
            <div class="flex justify-end ml-32">
                <ul class="flex p-4 mr-2 items-center justify-between">
                    <button id="theme-toggle" class="p-3 rounded-2xl bg-gray-200 dark:bg-gray-700 transition-all">
                        <!-- پیش‌فرض ماه -->
                        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                        </svg>

                        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden text-yellow-400"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 18a6 6 0 100-12 6 6 0 000 12z" />
                            <path
                                d="M12 2v2m0 16v2m10-10h-2M4 12H2m15.364-7.364l-1.414 1.414M7.05 16.95l-1.414 1.414M16.95 16.95l1.414 1.414M7.05 7.05 5.636 5.636" />
                        </svg>
                    </button>
                    <div class="flex justify-between items-center border border-gray-300 rounded-lg  py-2 ml-2 px-3">
                        @if (auth()->check())
                            <a href="#">{{ auth()->user()->name }}</a>
                        @else
                            <a href="{{ route('login') }}">
                                login
                            </a>
                        @endif
                    </div>

                    <div
                        class="bg-gray-600 text-white flex justify-between items-center border border-gray-300 rounded-lg  py-2 ml-2 px-3">
                        @if (auth()->check())
                            <a href="{{ route('logout') }}">
                                logout
                            </a>
                        @else
                            <a href="{{ route('register') }}">
                                register
                            </a>
                        @endif
                    </div>

                    <div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

<livewire:auth.login/>
  <script>
    const modal = document.getElementById('loginModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const loginBtn = document.getElementById('loginBtn');

    // باز و بسته کردن مودال
    openModalBtn.addEventListener('click', () => modal.classList.remove('hidden'));
    closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));

  </script>
