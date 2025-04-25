<x-fund-fairy-layout>

    <h2 class="text-2xl font-bold text-center text-fuchsia-950">Recent Businesses</h2>

    <div class="flex justify-end my-6">
        @auth
            <x-fund-fairy-button-link
                url="{{ route('businesses.create') }}"
            >
                Create Business
            </x-fund-fairy-button-link>
        @endauth
    </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">

            @forelse($businesses as $business)
                <x-business-card :business="$business" />
            @empty
                <p>No Businesses found</p>
            @endforelse
        </div>

    <div class="mt-4">{{ $businesses->links() }}</div>

</x-fund-fairy-layout>
