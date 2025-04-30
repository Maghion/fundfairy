<x-fund-fairy-layout>
    <x-slot name="title">Home</x-slot>

    {{--    Testimonials--}}
    <h2 class="text-center text-fuchsia-950 text-3xl mb-4 font-bold p-3">
        Real Voices, Real Impact
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($testimonials as $testimonial)
            <x-Testimonial-card :testimonial="$testimonial" />
        @empty
            <p>No Testimonial found</p>
        @endforelse
    </div>
    <a href="{{ route('testimonial.index') }}" class="block text-xl text-center">
        <i class="fa fa-plus-circle"></i> Show All Testimonial
    </a>

    {{--Bottom Banner--}}
    <x-fund-fairy-bottom-banner />

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

