<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <x-page-title>{{ $title }}</x-page-title>

    <div class="flex justify-center mb-6">
        <a href="{{ route('blog-posts.create') }}"
           class="bg-fuchsia-950 hover:bg-fuchsia-400 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>

    <main class="flex-auto">
        <div class="mt-16 sm:mt-32 sm:px-8">
            <div class="mx-auto w-full max-w-7xl">
                <div class="relative px-20">
                    <header class="max-w-3xl">
                        <p class="mt-6 text-base text-zinc-600">Hear all the story of the business that were fully funded by your donations.</p>
                    </header>
                    <div class="mt-16">
                        <div class="md:border-l md:border-zinc-100 md:pl-6">
                            <div class=" -mx-4 flex max-w-3xl flex-col space-y-4 md:mx-0">
                                @forelse($blogPosts as $blogPost)
                                    <x-blogPost-card :blogPost="$blogPost" />
                                @empty
                                    <p>No Blogposts found</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-fund-fairy-layout>
