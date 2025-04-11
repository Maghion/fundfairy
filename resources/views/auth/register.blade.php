<x-fund-fairy-layout>
    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Register</h2>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <x-inputs.text
                id="first_name"
                name="first_name"
                placeholder="First Name"
            />
            <x-inputs.text
                id="last_name"
                name="last_name"
                placeholder="Last Name"
            />
            <x-inputs.text
                id="email"
                name="email"
                type="email"
                placeholder="fund_fairy@fundfairy.com"
            />
            <x-inputs.text
                id="password"
                name="password"
                type="password"
                placeholder="Password. shhhhh..... dont tell anyone"
            />
            <x-inputs.text
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                placeholder="Confirm Password"
            />
            <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded focus:outline-none"
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
