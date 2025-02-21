<x-fundfairylayout>
    <x-slot name="title"> Create Profile </x-slot>
    <h1>Create Profile</h1>
    <form action="/users" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" />
        <input type="text" name="first_name" placeholder="First Name" />
        <input type="text" name="last_name" placeholder="Last Name" />
        <input type="text" name="password" placeholder="Password" />
        <input type="text" name="biography" placeholder="About" />
        <input type="text" name="avatar" placeholder="image link" />
        <input type="text" name="phone_number" placeholder="867-5309" />
        <button type="submit">Submit</button>
    </form>
</x-fundfairylayout>
