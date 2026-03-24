<x-layout>


    <x-slot:title>
        Change Password
    </x-slot>


    <h1 class="font-bold text-4xl">Change Password Page for {{ auth()->user()->username }}</h1>

    <div class="mt-4">
        <p class="mb-2">You can change password here:</p>


        <form class="grid gap-4" action="/changepassword" method="post">
            @csrf

            @error('currentpassword')
            <p>{{ $message }}</p>
            @enderror

            @error('newpassword')
            <p>{{ $message }}</p>
            @enderror
            
            <input class="border-2 p-1" type="password" name="currentpassword" placeholder="Current Username">
            <input class="border-2 p-1" type="password" name="newpassword" placeholder="New Password">
            <button class="border-2 p-1 cursor-pointer font-bold" type="submit">Change Password</button>
        </form>
    </div>

    
</x-layout>