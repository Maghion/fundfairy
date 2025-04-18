<x-fund-fairy-layout>
    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-6">Edit Blog Post</h1>

        <form action="{{ route('blog-posts.update', $blogPost) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                       value="{{ old('title', $blogPost->title) }}">
                @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content"
                          id="content"
                          rows="5"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                >{{ old('content', $blogPost->content) }}</textarea>
                @error('content')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Post
                </button>

                <a href="{{ route('blog-posts.show', $blogPost) }}"
                   class="bg-gray-500 hover:bg-gray-300 text-white font-bold py-2 px-4 rounded">
                    Cancel
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
            </div>
        </form>
    </div>
</x-fund-fairy-layout>
