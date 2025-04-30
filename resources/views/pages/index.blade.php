<x-fund-fairy-layout>
    <x-slot name="title">Home</x-slot>

                {{--    Testimonial Section--}}
    <h2 class="text-center text-fuchsia-950 text-3xl mb-4 font-bold p-3">
        Real Voices, Real Impact
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($testimonials as $testimonial)
            <div class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md p-4">
                {{-- Image on the left --}}
                <div class="flex-shrink-0">
                    @if($testimonial->testimonial_image)
                        <img class="w-20 h-20 rounded-full object-cover border-4 border-violet-600"
                             src="{{ asset('storage/' . $testimonial->testimonial_image) }}"
                             alt="{{ $testimonial->user->first_name ?? 'User' }}" />
                    @else
                        <img class="w-20 h-20 rounded-full bg-gray-800 object-cover border-4 border-violet-600"
                             src="{{ asset('storage/testimonials/no_users.png') }}"
                             alt="Default image" />
                    @endif
                </div>

                {{-- Name and Description on the right --}}
                <div class="ml-6 flex-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">
                        @if($testimonial->user && $testimonial->user->first_name && $testimonial->user->last_name)
                            {{ $testimonial->user->first_name }} {{ $testimonial->user->last_name }}
                        @else
                            Anonymous
                        @endif
                    </h3>
                    <p class="text-gray-700">
                        "{{ $testimonial->description }}"
                    </p>
                </div>
            </div>
        @empty
            <p>No Testimonial found</p>
        @endforelse
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

