<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | InfoGawian</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-sky-50">
    <div id="overlay" class="hidden fixed inset-0 bg-black opacity-50"></div>
    {{-- @include('partials.admin.navbar') --}}
    <div class="w-full h-screen flex flex-row pb-4">
        {{-- @include('partials.admin.sidebar') --}}
        <div class="w-full h-max flex flex-col p-6 mb-6" id="container">
            @yield('container')
        </div>
        @include('partials.admin.posts.create')
    </div>

    {{-- <div class="w-ful h-screen flex p-6">
        @include('partials.admin.posts.create')
    </div> --}}
    
    <script src="{{ asset('js/navside.js') }}"></script>
    <script src="{{ asset('js/createPost.js') }}"></script>
</body>
</html>