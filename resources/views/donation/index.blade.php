<x-fund-fairy-layout>
    <x-slot name="title">View all Donations</x-slot>
    <ul>
        @forelse($donations as $donation)
            <a href="{{ route('donation.show', $donation->id) }}">
                <strong>Amount:</strong> ${{ number_format($donation->amount, 2) }}
            </a>
            <li><strong>Donor:</strong>
            {{ $donation->anon }} ? 'Anonymous' : {{ $donation->user->first_name }} . ' ' . {{ $donation->user->last_name }}
            </li>
            <li><strong>Request Title:</strong> {{ $donation->donationRequest->title }}</li>
            <li><strong>Message:</strong> {{ $donation->message }}</li>
            <li><strong>Type:</strong> {{ ($donation->type) }}</li>
        @empty
            <li>No Donations Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
