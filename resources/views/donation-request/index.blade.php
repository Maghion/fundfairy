<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul class="grid grid-cols-3 gap-4">
        @forelse($donationRequests as $donationRequest)
            <x-donation-request-card :donationRequest="$donationRequest" />

        @empty
            <li>No donation requests found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>request_id
