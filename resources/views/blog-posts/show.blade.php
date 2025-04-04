
<x-fund-fairy-layout>
    <div class="max-w-2xl mx-auto mt-8">
        @foreach($blogPosts as $blogPost)
            <div class="bg-white shadow-md rounded-2xl p-6 mb-6 border border-zinc-100 transition hover:shadow-lg">
                <h1 class="text-2xl font-semibold text-zinc-800 mb-2">{{ $blogPost->title }}</h1>
                <p class="text-zinc-600 leading-relaxed">{{ $blogPost->content }}</p>
            </div>
        @endforeach
    </div>
</x-fund-fairy-layout>
