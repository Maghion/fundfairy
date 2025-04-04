<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($donationRequests as $donationRequest)
            <x-donation-request-card :donationRequest="$donationRequest" />

        @empty
            <li>No donation requests found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>request_id
