<x-fund-fairy-layout>
    <x-slot name="title"> {{ $title }}</x-slot>

    <h1>{{ $title }}</h1>

    <ul>
        @forelse($testimonials as $testimonial)
            <li>{{ $testimonial }}</li>
            @empty
            <li>No testimonials found</li>
        @endforelse
    </ul>

</x-fund-fairy-layout>
