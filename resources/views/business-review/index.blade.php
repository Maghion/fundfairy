<x-fund-fairy-layout>
    <x-slot name="title">{{$title}}</x-slot>
    <ul>
        @forelse($reviews as $review)
            <li>{{ $review }}</li>
        @empty
            <li style="color: red">No Reviews Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
