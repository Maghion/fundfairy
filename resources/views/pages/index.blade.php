<x-fund-fairy-layout>
    <x-slot name="title">Home</x-slot>
    <h1>Welcome to Fund Fairy</h1>
    <p>Fund your dream today!</p>

        <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
            Recent Blog Posts
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse($blogPosts as $blogPost)
                <x-blogPost-card $blogPosts =BlogPost::latest()->limit(3)->get(); />
            @empty
                <p>No Blogposts found</p>
            @endforelse
        </div>
        <a href="{{ route('$blogPosts.index') }}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-right"></i> Show All BlogPosts
        </a>
        <x-fund-fairy-bottom-banner />

</x-fund-fairy-layout>

