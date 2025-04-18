<x-fund-fairy-layout>
        <x-slot:pageTitle>All Blogpost</x-slot:pageTitle>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 max-w-2xl mx-auto">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">All Blog Posts</h1>
        <a href="{{ route('blog-posts.create') }}"
           class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Create New Post
        </a>
    </div>
    <main class="flex-auto">
        <div class="mt-16 sm:mt-32 sm:px-8">
            <div class="mx-auto w-full max-w-7xl">
                <div class="relative px-8">
                    <div class="mx-auto max-w-2xl">
                        <header class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">Blogposts</h1>
                            <p class="mt-6 text-base text-zinc-600">Hear all the story of the business that were fully funded by your donations.</p>
                        </header>
                        <div class="mt-16">
                            <div class="md:border-l md:border-zinc-100 md:pl-6">
                                <div class="-mx-4 flex max-w-3xl flex-col space-y-4 md:mx-0">
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
        </div>
    </main>
    </x-fund-fairy-layout>
