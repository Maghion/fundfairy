<x-fund-fairy-layout>
    <x-slot name="title">Home</x-slot>

    {{-- Testimonial --}}
    <h2 class="text-center text-fuchsia-900 text-4xl font-extrabold mt-10 mb-6">
        Real Voices, Real Impact
    </h2>

    {{-- Carousel Wrapper --}}
    <div x-data="{ active: 0, total: {{ $testimonialSlides->count() }} }"
         class="relative w-full overflow-hidden">

        {{-- Slide Container --}}
        <div class="flex transition-transform duration-700 ease-in-out"
             :style="'transform: translateX(-' + (active * 100) + '%)'">
            @foreach($testimonialSlides as $slide)
                <div class="min-w-full flex justify-center gap-6 px-2">
                    @foreach($slide as $testimonial)
                        <div class="w-full max-w-md">
                            <x-testimonial-card :testimonial="$testimonial" />
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        {{-- Left Arrow --}}
        <button @click="active = (active - 1 + total) % total"
                class="absolute top-1/2 left-4 -translate-y-1/2 bg-fuchsia-500 hover:bg-fuchsia-300 text-fuchsia-900 p-3 rounded-full shadow-md transition duration-300 z-20">
            &lt;
        </button>

        {{-- Right Arrow --}}
        <button @click="active = (active + 1) % total"
                class="absolute top-1/2 right-4 -translate-y-1/2 bg-fuchsia-500 hover:bg-fuchsia-300 text-fuchsia-900 p-3 rounded-full shadow-md transition duration-300 z-20">
            &gt;
        </button>
    </div>
    <a href="{{ route('testimonial.index') }}" class="block text-xl text-center">
        <i class="fa fa-plus-circle"></i> Show All Testimonial
    </a>

    {{--Bottom Banner--}}
    <x-fund-fairy-bottom-banner />

    {{--    BlogPost--}}
        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
            Recent Blog Posts
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse($blogPosts as $blogPost)
                <x-blogPost-card :blogPost="$blogPost" />
            @empty
                <p>No Blogposts found</p>
            @endforelse
        </div>
        <a href="{{ route('blog-posts.index') }}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i> Show All BlogPosts
        </a>
</x-fund-fairy-layout>

