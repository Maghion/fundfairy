<x-fund-fairy-layout>
    <div class="max-w-2xl mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-6">Edit Blog Post</h1>

        <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
            <form action="{{ route('blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text"
                           name="title"
                           id="title"
                           placeholder="Enter blog post title"
                           class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-fuchsia-500 focus:ring-fuchsia-500"
                           value="{{ old('title', $blogPost->title) }}">
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                    <textarea name="content"
                              id="content"
                              rows="6"
                              placeholder="Write something meaningful..."
                              class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-fuchsia-500 focus:ring-fuchsia-500">{{ old('content', $blogPost->content) }}</textarea>
                    @error('content')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                    <input type="file"
                           name="image"
                           id="image"
                           accept="image/*"
                           class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500">
                    @error('image')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror

                    @if($blogPost->image)
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">Current Image:</p>
                            <img src="{{ asset('storage/' . $blogPost->image) }}"
                                 alt="Blog image"
                                 class="mt-2 w-48 h-auto rounded-md border border-gray-200 shadow-sm">
                        </div>
                    @endif
                </div>

                <!-- Buttons -->
                <div class="flex justify-end gap-4">
                    <a href="{{ route('blog-posts.show', $blogPost) }}"
                       class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors">
                        Cancel
                    </a>

                    <button type="submit"
                            class="bg-fuchsia-700 hover:bg-fuchsia-900 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                        Update Post
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-fund-fairy-layout>
