<x-fund-fairy-layout>
    <div class="max-w-md mx-auto mt-10 p-8 bg-white rounded-2xl shadow-xl space-y-6">
        <h1 class="text-4xl font-extrabold text-fuchsia-900 border-b border-fuchsia-200 pb-4">
            Newsletter
        </h1>

        <p class="text-gray-700 text-base">
            Stay connect with us — Please, enter your email to subscribe to our newsletter!`
        </p>

        <form method="POST" action="{{ route('newsletter.store') }}">
            @csrf
            <div class="space-y-4">
                <x-inputs.text
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Your email address"
                    class="w-full"
                />

                <button
                    type="submit"
                    class="w-full bg-fuchsia-500 hover:bg-fuchsia-600 transition-colors text-white font-semibold py-3 rounded-xl shadow-md hover:shadow-lg focus:outline-none"
                >
                    Subscribe
                </button>
            </div>
        </form>
    </div>
</x-fund-fairy-layout>

