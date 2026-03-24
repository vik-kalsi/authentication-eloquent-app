<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="my-4 grid justify-center bg-stone-700 text-white">
    


    <div class="mb-4">
        <ul class="border-2 flex py-2 justify-center">
            <li class="px-2"><a class="hover:font-bold" href="/">Homepage</a></li>

            @if(!auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/login">Login</a></li>
            @endif

            @if(!auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/register">Register</a></li>
            @endif

            @if(auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/dashboard">Dashboard</a></li>
            @endif

            @if(auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/listofusers">List of Users</a></li>
            @endif

            @if(auth()->user())
                <li class="px-2"><a class="hover:font-bold" href="/logout">Logout</a></li>
            @endif
        </ul>
    </div>
    

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>