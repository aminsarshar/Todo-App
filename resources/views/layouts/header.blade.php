<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>todo-app</title>
</head>


<body class="bg-white dark:bg-slate-700" style="direction:rtl ; font-family:system-ui;">
    <nav class="bg-slate-100 dark:bg-slate-800 text-slate-800 dark:text-slate-300" style="direction: ltr">
        <div class="flex p-2 mr-32 justify-between">
            <div class="flex">
                <a href="{{route('todo.index')}}" class="p-3 font-bold text-2xl">Todo App</a>
                <ul class="flex justify-start p-4">
                    <a href="{{route('todo.index')}}">
                        <li class="mr-8 hover:text-slate-500 dark:hover:text-slate-400 transition-opacity text-lg">
                            Home
                        </li>
                    </a>
                    <a href="{{route('category.index')}}">
                        <li class="mr-8 hover:text-slate-500 dark:hover:text-slate-400 transition-opacity text-lg">
                            Category
                        </li>
                </ul>
            </div>
            <div class="flex justify-end ml-32">
                <ul class="flex p-4 mr-2">
                    <a href="#">
                        <li class="mr-4 ml-0 hover:text-gray-500 transition-opacity text-2xl">
                            <i class="fa-solid fa-shopping-cart"></i>
                        </li>
                    </a>
                    <a href="#">
                        <li class="mr-4 hover:text-gray-500 transition-opacity text-2xl">
                            <i class="fa-regular fa-moon"></i>
                        </li>
                    </a>
                    <div class="flex justify-between items-center border border-gray-300 rounded-lg mr-14 py-1 px-3">
                        <a href="#">
                            <li class="hover:text-gray-500 transition-opacity">
                                ورود
                            </li>
                        </a>
                        <span class="mr-1">/</span>
                        <a href="#">
                            <li class="hover:text-gray-500 transition-opacity">
                                ثبت نام
                            </li>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
