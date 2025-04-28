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
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700" for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ $user->name }}"
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

        <div class="flex flex-col gap-6 w-full md:w-1/2">
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

        <div class="bg-white p-8 rounded-lg shadow-md w-full">
            <h3 class="text-3xl text-center font-bold mb-4">
                My Donations
            </h3>
            @forelse ($donations as $donation)
                <div class="flex justify-between items-center border-b-2 border-gray-200 py-2">
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('donation-request.show', $donation->donationRequest->id) }}">
                            <h3 class="text-xl font-semibold text-fuchsia-950">
                                {{ $donation->donationRequest->title }}
                            </h3>
                        </a>
                        <p class="text-lg text-gray-500 font-italic">${{$donation->amount}}</p>

                    </div>
                </div>
            @empty
                <p class="text-gray-700">No donations to display</p>
            @endforelse
            <div class="mt-6">
                {{ $donations->withQueryString()->links('pagination::tailwind') }}
            </div>
        </div>

</div>
    </section>

</x-fund-fairy-layout>>
