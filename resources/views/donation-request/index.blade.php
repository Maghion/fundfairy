<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-page-title>{{ $title }}</x-page-title>
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse($donationRequests as $donationRequest)
            <x-donation-request-card :donationRequest="$donationRequest" />

        @empty
            <li>No donation requests found</li>
        @endforelse
    </ul>
    <!-- Pagination Links -->
    <div class="mt-6">
        {{ $donationRequests->links('pagination::tailwind') }}
    </div>
</x-fund-fairy-layout>
