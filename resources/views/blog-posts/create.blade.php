<x-fund-fairy-layout>
    <x-slot name="title">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</x-slot>

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</h1>
        <a href="{{ route('blog-posts.create') }}"
           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>

    <form action="{{ isset($blogPost) ? route('blog-posts.update', $blogPost) : route('blog-posts.store') }}" method="POST">
        @csrf
        @if(isset($blogPost))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text"
                   name="title"
                   id="title"
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                   value="{{ old('title', isset($blogPost) ? $blogPost->title : '') }}">
            @error('title')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content"
                      id="content"
                      rows="5"
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
            >{{ old('content', isset($blogPost) ? $blogPost->content : '') }}</textarea>
            @error('content')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex gap-4 justify-end">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ isset($blogPost) ? 'Update Post' : 'Create Post' }}
            </button>

            @if(isset($blogPost))
                <a href="{{ route('blog-posts.create') }}"
                   class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    New Post
                </a>

                <form action="{{ route('blog-posts.destroy', $blogPost) }}"
                      method="POST"
                      class="inline"
                      onsubmit="return confirm('Are you sure you want to delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Delete Post
                    </button>
                </form>
            @endif
        </div>
    </form>
</x-fund-fairy-layout>
