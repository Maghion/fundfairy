
<x-fund-fairy-layout>

        <div
            class="bg-white rounded-lg shadow-md w-full md:max-w-xl mx-auto mt-12 p-8 py-12"
        >
            <h2 class="text-4xl text-center font-bold mb-4">Edit User</h2>

            <!--Form Start-->
            <form
                method="POST"
                action="{{ route('users.update', $user->id) }}"
                enctype="multipart/form-data"
            >
                @csrf
                @method("PUT")

                <x-inputs.text
                    id="email"
                    name="email"
                    placeholder="Email"
                    :value="old('email', $user->email)"

                />

                <x-inputs.text
                    id="first_name"
                    name="first_name"
                    placeholder="First Name"
                    :value="old('first_name', $user->first_name)"
                />

                <x-inputs.text
                    id="last_name"
                    name="last_name"
                    placeholder="Last Name"
                    :value="old('last_name', $user->last_name)"
                />


                <x-inputs.text-area
                    id="biography"
                    name="biography"
                    placeholder="Biography"
                    :value="old('biography', $user->biography)"
                />

                <x-inputs.file
                    id="avatar"
                    name="avatar"
                    placeholder="Avatar"
                    :value="old('avatar', $user->avatar)"
                />

                <x-inputs.text
                    id="phone_number"
                    name="phone_number"
                    placeholder="Phone Number"
                    :value="old('phone_number', $user->phone_number)"
                />

                <x-inputs.text
                    id="role"
                    name="role"
                    placeholder="Role"
                    :value="old('role', $user->role)"

                />


                <button
                    type="submit"
                    class="w-full bg-fuchsia-950 hover:bg-violet-950 text-white px-4 py-2 rounded focus:outline-none"
                >
                   Edit
                </button>

            </form>
        </div>
    @endif @endauth
</x-fund-fairy-layout>
