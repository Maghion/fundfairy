<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($comments as $comment)
            @if($loop->even)
                <li style="color:green;"> {{ $comment }}</li>
            @else
                <li>{{ $comment }}</li>
            @endif
        @empty
            <li>No Donations Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
