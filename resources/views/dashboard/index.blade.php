<x-fund-fairy-layout>
    <section class="flex flex-col md:flex-row gap-6">

        <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-1/2">
            <h3 class="text-3xl text-center font-bold mb-4">Profile Info</h3>
            @if($user->avatar)
                <div class="mt-2 flex justify-center">
                    <img
                        src="{{ asset('storage/' . $user->avatar) }}"
                        alt="Avatar"
                        class="w-32 h-32 object-cover rounded-full"
                    />
                </div>
            @endif
            <form method="POST" action="{{ route('users.update', $user) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700" for="first_name">First Name</label>
                    <input id="last_name" type="text" name="first_name" value="{{ $user->first_name }}"
                           class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="last_name">Last Name</label>
                    <input id="last_name" type="text" name="last_name" value="{{ $user->last_name }}"
                           class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <div class="mb-4">
                    <label for="biogrphy" class="block text-gray-700">bio</label>
                    <textarea id="biogrphy" name="biogrphy" >
                        {{$user->biography}}
                    </textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="phone_number">Phone Number</label>
                    <input id="phone_number" type="text" name="phone_number" value="{{ $user->phone_number }}"
                           class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="email">Email</label>
                    <input id="email" type="text" name="email" value="{{ $user->email }}"
                           class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="avatar">Profile Avatar</label>
                    <input id="avatar" type="file" name="avatar" class="w-full px-4 py-2 border rounded focus:outline-none" />
                </div>
                <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">Save</button>
            </form>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md w-full">
            <h3 class="text-3xl text-center font-bold mb-4">
                My Businesses
            </h3>
            @forelse ($businesses as $business)
                <div class="flex justify-between items-center border-b-2 border-gray-200 py-2">
                    <div>
                        <h3 class="text-xl font-semibold">
                            {{$business->name}}
                        </h3>
                    </div>
                    <div class="flex space-x-4">
                        <a
                            href="{{route('businesses.edit', $business->id)}}"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded text-sm"
                        >
                            Edit
                        </a>
                        <form
                            method="POST"
                            action="{{route('businesses.destroy', $business->id)}}?from=dashboard"
                            onsubmit="return confirm('Are you sure you want to delete this business')"
                            >
                            @csrf @method('DELETE')
                            <button
                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm"
                                type="submit"
                                >
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <p class="text-gray-700">No businesses to display</p>
            @endforelse
        </div>
    </section>

</x-fund-fairy-layout>>
