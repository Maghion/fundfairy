<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($businesses as $business)

            <li>
                <a href="{{ route('businesses.show', $business->id) }}">
                    {{ $business->name }}
                </a>
                </li>
        @empty
            <li>No businesses found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
