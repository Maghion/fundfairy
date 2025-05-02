<x-fund-fairy-layout>
    <x-slot name="title">Home</x-slot>
        {{--Why FundFairy section--}}
    <section class="bg-white py-12 px-4 md:px-8 mb-10 border-b border-gray-200">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-8">

            {{-- Image Section --}}
            <div class="w-full md:w-1/2">
                <img src="{{ asset('storage/homepage/aboutus.png') }}"
                     alt="Why FundFairy"
                     class="rounded-xl shadow-lg w-full h-auto">
            </div>

            {{-- Text Section --}}
            <div class="w-full md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-extrabold text-fuchsia-900 mb-4">Why FundFairy?</h2>
                <p class="text-lg text-gray-700 mb-6">
                    FundFairy helps small businesses and creators grow with support from the community.
                    Whether you need funding or want to give, we make it simple and meaningful.

                </p>

                {{-- Button linking to About page using url prop --}}
                <x-fund-fairy-button-link :url="'/about'" btnColor="bg-fuchsia-700" textClass="text-white" icon="info-circle">
                    Learn More
                </x-fund-fairy-button-link>
            </div>
        </div>
    </section>
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

