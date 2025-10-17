<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>آقای ادمین | قالب واکنشگرا مدیریتی</title>
    @include('admin.sections.css')
    @livewireStyles

    <script src="assets/js/modernizr.min.js"></script>
</head>

<body class="fixed-left">
    <div id="wrapper">
        @include('admin.sections.header')
        @include('admin.sections.left-sidebar')

        <div class="content-page">
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>

            @include('admin.sections.footer')
        </div>

        @include('admin.sections.right-sidebar')
    </div>

    @include('admin.sections.js')
    @livewireScripts

    {{-- 👇 اینجا بذار --}}
    @flasher_render_livewire

</body>
</html>
