<x-layout>


    <x-slot:title>
        Registration
    </x-slot>


    <h1 class="font-bold text-4xl">Registration Page</h1>


    <div class="mt-4">
        
        <form class="grid gap-4" action="/register" method="post">
            @csrf
            
            @error('username')
            <p>{{ $message }}</p>
            @enderror

            <input class="border-2 p-1" type="text" name="username" placeholder="Username" value="{{ old('username') }}">

            @error('password')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="password" name="password" placeholder="Password">


            @error('password_confirmation')
            <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="password" name="password_confirmation" placeholder="Confirm Password">

            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Register</button>
        </form>

    </div>


</x-layout>