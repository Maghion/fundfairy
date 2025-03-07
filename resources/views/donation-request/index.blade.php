<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($donationRequests as $donationRequest)
{{--            <li>{{ $donationRequest ->title}}</li>--}}
            <a href="{{ route('donation-request.show', $donationRequest->id) }}">
                {{ $donationRequest->title }}
                {{ $donationRequest ->user_id}}
                {{ $donationRequest->description }}
                {{ $donationRequest ->status}}
                {{ $donationRequest ->funding_goal}}
                {{ $donationRequest ->featured}}
            </a>

        @empty
            <li>No donation requests found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
