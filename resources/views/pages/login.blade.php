<x-layout>


    <x-slot:title>
        Login
    </x-slot>


    <h1 class="font-bold text-4xl">Login Page</h1>


    <div class="mt-4">
        
        <form class="grid gap-4" action="/login" method="post">
            @csrf

            <input class="border-2 p-1" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
            <input class="border-2 p-1" type="password" name="password" placeholder="Password">
            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Login</button>

        </form>

    </div>


</x-layout>