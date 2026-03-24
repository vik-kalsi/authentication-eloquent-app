<x-layout>


    <x-slot:title>
        Dashboard
    </x-slot>


    <h1 class="font-bold text-4xl">Dashboard Page</h1>


    <h1> Hello, {{ auth()->user()->username }} </h1>

    <div class="mt-4">
        <p>You have logged in</p>
    </div>

    
</x-layout>