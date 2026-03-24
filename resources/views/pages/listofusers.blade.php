<x-layout>


    <x-slot:title>
        User List
    </x-slot>


    <h1 class="font-bold text-4xl">List of Users</h1>


    <div class="mt-4">     
        @foreach ($users as $user)

            <ul class="my-1">
                <li>{{ $user->username }}</li>
            </ul>

        @endforeach

    </div>


</x-layout>