<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($donations as $donation)
            @if($loop->even)
                <li style="color:green;"> {{ $donation }}</li>
            @else
                <li>{{ $donation }}</li>
            @endif
        @empty
            <li>No Donations Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
