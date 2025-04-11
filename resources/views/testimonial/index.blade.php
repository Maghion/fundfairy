<x-fund-fairy-layout>
    <x-slot name="title"> {{ $title }}</x-slot>
    <h2 class="text-2xl font-bold text-center">{{ $title }}</h2>
    {{-- Create Button Above Cards to create new testmonial--}}
    <div class="flex justify-end my-6" >
        <x-fund-fairy-button-link
            url="{{ route('testimonial.create') }}"
        >
            Create Testimonial
        </x-fund-fairy-button-link>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">

        @forelse($testimonials as $testimonial)
            <x-testimonial-card :testimonial="$testimonial">

            </x-testimonial-card>

        @empty
            <p>No Testimonials Found</p>
        @endforelse
    </div>
</x-fund-fairy-layout>
