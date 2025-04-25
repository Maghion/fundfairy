<x-fund-fairy-layout>
    <div class="flex gap-4 justify-end">
        <a href="{{ route('blog-posts.edit', $blogPost) }}"
           class="bg-fuchsia-950 hover:bg-fuchsia-400 text-white font-bold py-2 px-4 rounded">
            Edit Post
        </a>
    </div>
    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white shadow-md rounded-2xl p-6 mb-6 border border-zinc-100 transition hover:shadow-lg">
            <h1 class="text-2xl font-semibold text-zinc-800 mb-2">{{ $blogPost->title }}</h1>
            <p class="text-zinc-600 leading-relaxed">{{ $blogPost->created_at}} {{ $blogPost->id}} </p>
            <p class="text-zinc-600 leading-relaxed">{{ $blogPost->content }}</p>
        </div>
        <a href="{{ route('blog-posts.index') }}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-left"></i> Back to BlogPosts
        </a>
    </div>

</x-fund-fairy-layout>

