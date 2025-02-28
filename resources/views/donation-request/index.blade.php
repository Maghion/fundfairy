<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($donationRequests as $donationRequest)
            <li>{{ $donationRequest }}</li>
        @empty
            <li>No donation requests found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
