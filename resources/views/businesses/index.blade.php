<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($businesses as $business)

            <li>
                <a href="{{ route('businesses.show', $business->id) }}">
                    {{ $business->name }}
                </a><br>
                {{ $business->name }}<br>
                {{ $business->address1 }}<br>
                {{ $business->address2 }}<br>
                {{ $business->city }}<br>
                {{ $business->state }}<br>
                {{ $business->zip_code }}<br>
                {{ $business->phone_number }}</li>
        @empty
            <li>No businesses found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
