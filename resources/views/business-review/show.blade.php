<x-fund-fairy-layout>
    <x-slot name="title">Viewing {{ $review->title }}</x-slot>
    <h1 class='text-2xl'>{{ $review->title }}</h1>
    <p>{{ $review->rating }}</p>
    <p>{{ $review->comment }}</p>

</x-fund-fairy-layout>
