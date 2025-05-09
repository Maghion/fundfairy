<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-page-title>{{ $title }}</x-page-title>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse ($bookmarks as $bookmark)
            <x-donation-request-card :donationRequest="$bookmark" />
        @empty
            <p class="text-center text-gray-500">No bookmarks available</p>
        @endforelse
    </div>

    {{--    {{ $bookmarks->links() }}--}}
</x-fund-fairy-layout>
