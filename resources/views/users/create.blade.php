<x-fund-fairy-layout>
    <x-slot name="title"> Create Profile </x-slot>
    <h1>Create Profile</h1>
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" />
        <input type="text" name="first_name" placeholder="First Name" />
        <input type="text" name="last_name" placeholder="Last Name" />
        <input type="text" name="password" placeholder="Password" />
        <input type="text" name="biography" placeholder="About" />
        <input
            id="avatar"
            type="file"
            name="avatar"
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
            placeholder="image link"
        />
        <input type="text" name="phone_number" placeholder="867-5309" />
        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>
