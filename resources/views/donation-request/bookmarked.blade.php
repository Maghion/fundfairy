<x-fund-fairy-layout>
    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
        Bookmarked Jobs
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse ($bookmarks as $bookmark)
            <x-donation-request-card :donationRequest="$bookmark" />
        @empty
            <p class="text-center text-gray-500">No bookmarks available</p>
        @endforelse
    </div>

{{--    {{ $bookmarks->links() }}--}}
</x-fund-fairy-layout>
