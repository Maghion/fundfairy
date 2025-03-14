<x-fund-fairy-layout>
    <x-slot name="title">Viewing all Donations</x-slot>
    <ul>
        @forelse($donations as $donation)
            <a href="{{ route('donation.show', $donation->id) }}">
                <strong>Amount:</strong> ${{ number_format($donation->amount, 2) }}
            </a>
            <li><strong>Request Title:</strong> {{ $donation->donationRequest->title }}</li>
        @empty
            <li>No Donations Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
