<x-fund-fairy-layout>
        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
            Recent Businesses
        </h2>
    <div class="mt-4">{{ $businesses->links() }}</div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse($businesses as $business)
                <x-business-card :business="$business" />
            @empty
                <p>No Businesses found</p>
            @endforelse
        </div>

</x-fund-fairy-layout>
