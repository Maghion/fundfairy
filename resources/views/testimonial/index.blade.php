<x-fund-fairy-layout>
    <x-slot name="title"> {{ $title }}</x-slot>
    <h2 class="text-2xl">{{ $title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
        @forelse($testimonials as $testimonial)
            <x-testimonial-card :testimonial="$testimonial">

            </x-testimonial-card>

        @empty
            <p>No Testimonials Found</p>
        @endforelse
    </div>
</x-fund-fairy-layout>
