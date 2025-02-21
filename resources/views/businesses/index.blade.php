<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($businesses as $business)
            <li>{{ $business }}</li>
        @empty
            <li>No businesses found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
//
