<x-fund-fairy-layout>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <section class="md:col-span-3">
            <div class="rounded-lg shadow-md bg-white p-3">
                <div class="flex justify-between items-center">
                    <a class="block p-4 text-blue-700" href="{{ route('users.index') }}">
                        <i class="fa fa-arrow-alt-circle-left"></i>
                        Back To Listings
                    </a>
                    <div class="flex space-x-3 ml-4">
                        <a
                            href="/edit"
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded"
                        >Edit</a
                        >
                        <!-- Delete Form -->
                        <form method="POST">
                            <button
                                type="submit"
                                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
                            >
                                Delete
                            </button>
                        </form>
                        <!-- End Delete Form -->
                    </div>
                </div>

                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Name</h2>
                    <p class="text-sm text-gray-500">{{ $user->name }}</p>

                </div>

            <div class="container mx-auto p-4">
                <h2 class="text-xl font-semibold mb-4">Email</h2>
                <p class="text-sm text-gray-500">{{ $user->email }}</p>

            </div>
        </section>

    </div>


{{--    <x-slot name="title">{{$title}}</x-slot>--}}
{{--    <h1 class='text-2xl'>{{ $user->email }}</h1>--}}
</x-fund-fairy-layout>
