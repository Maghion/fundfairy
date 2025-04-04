<x-fund-fairy-layout>
        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
            Recent Businesses
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse($businesses as $business)
                <x-business-card :business="$business" />
            @empty
                <p>No Businesses found</p>
            @endforelse
        </div>
        <a href="{{ route('businesses.index') }}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i> Show All Businesses
        </a>
        <x-fund-fairy-bottom-banner/>
</x-fund-fairy-layout>
