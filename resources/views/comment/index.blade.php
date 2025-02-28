<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($comments as $comment)
            <li>{{ $comment }}</li>
        @empty
            <li>No comment found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
