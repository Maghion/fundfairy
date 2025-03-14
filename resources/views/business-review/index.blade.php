<x-fund-fairy-layout>
    <x-slot name="title">{{$title}}</x-slot>
    <ul>
        @forelse($reviews as $review)
            <a href="{{ route('business-review.show', $review->id) }}">
                {{ $review->title }}
            </a>
        @empty
            <li style="color: red">No Reviews Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
