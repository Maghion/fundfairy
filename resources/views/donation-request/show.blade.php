<x-fund-fairy-layout>
    <x-slot name="title">Donation Requests {{ $donationRequest->title }}</x-slot>
    <h1 class='text-2xl'>{{ $donationRequest->title }}</h1>
    <p>{{ $donationRequest->description }}</p>
</x-fund-fairy-layout>
