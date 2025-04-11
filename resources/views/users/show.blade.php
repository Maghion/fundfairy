<x-fund-fairy-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <section class="md:col-span-3">
            <div class="rounded-xl shadow-lg bg-white p-6 space-y-6">
                <!-- Top Navigation -->
                <div class="flex justify-between items-center">
                    <a class="text-blue-600 hover:underline flex items-center gap-2" href="{{ route('users.index') }}">
                        <i class="fa fa-arrow-alt-circle-left"></i>
                        Back To Listings
                    </a>
                    <div class="flex gap-3">
                        <a href="/edit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md text-sm">
                            Edit
                        </a>
                        <form method="POST">
                            <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>

                <!--  Card : Avatar, First Name, Last Name, Email, Role -->

                <div class="flex items-center gap-4">
                    @if($user->avatar)
                        <img src="/images/{{ $user->avatar}}" alt="{{ $user->avatar }}"
                             class="w-16 h-16 object-cover rounded-full shadow" />
                    @endif
                    <div>
                        <p class="text-lg font-semibold text-gray-800">{{ $user->first_name }} {{ $user->last_name }}</p>
                        <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        <p class="text-sm text-gray-500 capitalize">{{ $user->role }}</p>
                    </div>
                </div>

                <!-- Biography -->
                <div>
                    <h3 class="text-md font-semibold text-gray-700 mb-1">Biography</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">{{ $user->biography }}</p>
                </div>
            </div>
        </section>
    </div>
</x-fund-fairy-layout>


{{--<x-fund-fairy-layout>--}}
{{--    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">--}}
{{--        <section class="md:col-span-3">--}}
{{--            <div class="rounded-lg shadow-md bg-white p-3">--}}
{{--                <div class="flex justify-between items-center">--}}
{{--                    <a class="block p-4 text-blue-700" href="{{ route('users.index') }}">--}}
{{--                        <i class="fa fa-arrow-alt-circle-left"></i>--}}
{{--                        Back To Listings--}}
{{--                    </a>--}}
{{--                    <div class="flex space-x-3 ml-4">--}}
{{--                        <a--}}
{{--                            href="/edit"--}}
{{--                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded"--}}
{{--                        >Edit</a--}}
{{--                        >--}}
{{--                        <!-- Delete Form -->--}}
{{--                        <form method="POST">--}}
{{--                            <button--}}
{{--                                type="submit"--}}
{{--                                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"--}}
{{--                            >--}}
{{--                                Delete--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                        <!-- End Delete Form -->--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                </div>--}}
{{--                <div class="p-4">--}}

{{--                    <p class="text-sm text-gray-500">{{ $user->first_name }}</p>--}}
{{--                    <p class="text-sm text-gray-500">{{ $user->last_name }}</p>--}}
{{--                    <p class="text-sm text-gray-500">{{ $user->email }}</p>--}}
{{--                    <p class="text-sm text-gray-500">{{ $user->biography }}</p>--}}
{{--                    <p class="text-sm text-gray-500">{{ $user->avatar }}</p>--}}
{{--                    <img src="{{ $user->avatar }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover" />--}}
{{--                    <p class="text-sm text-gray-500">{{ $user->role }}</p>--}}

{{--            </div>--}}
{{--        </section>--}}

{{--    </div>--}}


{{--</x-fund-fairy-layout>--}}
