<x-fund-fairy-layout>
    <x-slot name="title">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</x-slot>


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
                    class="bg-fuchsia-950 hover:bg-violet-600 text-white font-bold py-2 px-4 rounded">
                {{ isset($blogPost) ? 'Update Post' : 'Create Post' }}
            </button>
        </div>
    </form>
</x-fund-fairy-layout>
