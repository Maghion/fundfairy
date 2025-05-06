{{--<x-fund-fairy-layout>--}}
{{--    <x-slot name="title">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</x-slot>--}}


{{--    <form action="{{ isset($blogPost) ? route('blog-posts.update', $blogPost) : route('blog-posts.store') }}" method="POST">--}}
{{--        @csrf--}}
{{--        @if(isset($blogPost))--}}
{{--            @method('PUT')--}}
{{--        @endif--}}

{{--        <div class="mb-4">--}}
{{--            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>--}}
{{--            <input type="text"--}}
{{--                   name="title"--}}
{{--                   id="title"--}}
{{--                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"--}}
{{--                   value="{{ old('title', isset($blogPost) ? $blogPost->title : '') }}">--}}
{{--            @error('title')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <div class="mb-4">--}}
{{--            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>--}}
{{--            <textarea name="content"--}}
{{--                      id="content"--}}
{{--                      rows="5"--}}
{{--                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"--}}
{{--            >{{ old('content', isset($blogPost) ? $blogPost->content : '') }}</textarea>--}}
{{--            @error('content')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}
{{--        </div>--}}



{{--        <div class="flex gap-4 justify-end">--}}
{{--            <button type="submit"--}}
{{--                    class="bg-fuchsia-950 hover:bg-fuchsia-400 text-white font-bold py-2 px-4 rounded">--}}
{{--                {{ isset($blogPost) ? 'Update Post' : 'Create Post' }}--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-fund-fairy-layout>--}}

<x-fund-fairy-layout>
    <x-slot name="title">{{ isset($blogPost) ? 'Edit Blog Post' : 'Create Blog Post' }}</x-slot>

    <div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <form action="{{ isset($blogPost) ? route('blog-posts.update', $blogPost) : route('blog-posts.store') }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($blogPost))
                @method('PUT')
            @endif

            <!-- Title Field -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       placeholder="Enter blog post title"
                       class="block w-full rounded-lg border-gray-300 focus:border-fuchsia-500 focus:ring-fuchsia-500 shadow-sm"
                       value="{{ old('title', isset($blogPost) ? $blogPost->title : '') }}">
                @error('title')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <!-- Content Field -->
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                <textarea name="content"
                          id="content"
                          rows="6"
                          placeholder="Write something amazing..."
                          class="block w-full rounded-lg border-gray-300 focus:border-fuchsia-500 focus:ring-fuchsia-500 shadow-sm">{{ old('content', isset($blogPost) ? $blogPost->content : '') }}</textarea>
                @error('content')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload Field -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image</label>
                <input type="file"
                       name="image"
                       id="image"
                       accept="image/*"
                       class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500">
                @error('image')
                <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror

                <!-- Image Preview (if editing and image exists) -->
                @if(isset($blogPost) && $blogPost->image)
                    <div class="mt-4">
                        <p class="text-sm text-gray-600">Current Image:</p>
                        <img src="{{ asset('storage/' . $blogPost->image) }}"
                             alt="Blog image"
                             class="mt-2 w-48 h-auto rounded-md border border-gray-200 shadow-sm">
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                        class="bg-fuchsia-950 hover:bg-fuchsia-400 transition-colors text-white font-semibold py-2 px-6 rounded-lg">
                    {{ isset($blogPost) ? 'Update Post' : 'Create Post' }}
                </button>
            </div>
        </form>
    </div>

</x-fund-fairy-layout>

