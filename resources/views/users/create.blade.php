<x-fund-fairy-layout>
    <div
        class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
    >
        <h2 class="text-4xl text-center font-bold mb-4">Create User</h2>

        <!--Form Start-->
        <form
            method="POST"
            action="{{ route('users.store') }}"
            enctype="multipart/form-data"
        >
            @csrf

            <x-inputs.text
                id="email"
                name="email"
                placeholder="Email"

            />


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



            <x-inputs.text-area
                id="biography"
                name="biography"
                placeholder="Biography"
            />

            <x-inputs.file
                id="avatar"
                name="avatar"
                placeholder="Avatar"
            />

            <x-inputs.text
                id="phone_number"
                name="phone_number"
                placeholder="Phone Number"
            />

            <x-inputs.text
                id="role"
                name="role"
                placeholder="Role"

            />


            <button
                type="submit"
                class="w-full bg-fuchsia-950 hover:bg-violet-950 text-white px-4 py-2 rounded focus:outline-none"
            >
                Save
            </button>

        </form>
    </div>

</x-fund-fairy-layout>
