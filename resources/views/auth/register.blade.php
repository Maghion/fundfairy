
<x-fund-fairy-layout style="background-color: blue;">
    <x-slot name="title">{{ $title }}</x-slot>

    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <x-inputs.text
                id="email"
                name="email"
                type="text"
                placeholder="Email address"
                value="{{ old('email') }}"
            />
            <x-inputs.text
                id="password"
                name="password"
                type="password"
                placeholder="Password"
                value="{{ old('password') }}"
            />
            <x-inputs.text
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                placeholder="Confirm Password"
            />
            <button
                type="submit"
                class="w-full bg-fuchsia-950 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
            >
                Register
            </button>

            <p class="mt-4 text-gray-500">
                Already have an account?
                <a class="text-blue-900" href="{{route('login')}}">Login</a>
            </p>
        </form>
    </div>
</x-fund-fairy-layout>
