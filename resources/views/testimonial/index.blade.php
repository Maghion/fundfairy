<x-fund-fairy-layout>
    <x-slot name="title"> {{ $title }}</x-slot>
    <ul>
        @forelse($testimonials as $testimonial)
            <li>{{ $testimonial }}</li>
            <a href="{{ route('testimonial.show', $testimonial->id) }}">
                {{ $testimonial->title }}
            </a>
            @empty
            <li>No testimonials found</li>
        @endforelse
    </ul>

</x-fund-fairy-layout>
