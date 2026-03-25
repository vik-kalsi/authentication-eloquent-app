<x-layout>


    <x-slot:title>
        Delete Account
    </x-slot>


    <h1 class="font-bold text-4xl">Delete Account Page</h1>


    <h1 class="mt-2"> Delete Account for: {{ auth()->user()->username }} </h1>

    <div class="mt-4">
        <form action="deleteaccount" method="post">
            @csrf
            @method('DELETE')

            <button class="cursor-pointer border-2 p-1 hover:bg-red-900" type="submit">Delete Account</button>
        </form>
    </div>

    
</x-layout>