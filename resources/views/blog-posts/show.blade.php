<x-fund-fairy-layout>
    @can('update', $blogPost)
    <div class="flex gap-4 justify-end">
        <a href="{{ route('blog-posts.edit', $blogPost) }}"
           class="bg-fuchsia-700 hover:!bg-fuchsia-900 text-white hover:text-white hover:no-underline font-bold py-2 px-4 rounded">
            Edit Post
        </a>
        <form action="{{ route('blog-posts.destroy', $blogPost) }}"
              method="POST"
              class="inline"
              onsubmit="return confirm('Are you sure you want to delete this post?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="bg-red-500 hover:!bg-red-700 text-white font-bold py-2 px-4 rounded">
                Delete Post
            </button>
        </form>
    </div>
    @endcan
    <div class="max-w-2xl mx-auto mt-8">
        <div class="bg-white shadow-md rounded-2xl p-6 mb-6 border border-zinc-100 transition hover:shadow-lg">
            <h1 class="text-2xl font-semibold text-zinc-800 mb-2">{{ $blogPost->title }}</h1>
            <p class="text-zinc-600 leading-relaxed">{{ $blogPost->created_at->format('F j, Y \a\t h:i A') }} by {{ $blogPost->user->first_name}} {{ $blogPost->user->last_name}}</p>
{{--            <p class="text-zinc-600 leading-relaxed"> by {{ $blogPost->user->first_name}} {{ $blogPost->user->last_name}}</p>--}}
            <p class="text-zinc-600 leading-relaxed">{{ $blogPost->content }}</p>
        </div>
        <a href="{{ route('blog-posts.index') }}" class="block text-xl text-center">
            <i class="fa fa-arrow-alt-circle-left"></i> Back to blog posts
        </a>
    </div>

</x-fund-fairy-layout>

