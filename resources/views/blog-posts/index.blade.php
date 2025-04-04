<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>

        @forelse($blogPosts as $blogPost)
            <li>
                <a href="{{ route('blog-posts.show', $blogPost->id) }}">
                    {{ $blogPost->title }}
                </a>
            </li>
        @empty
            <li>No blog posts found</li>
        @endforelse
    </ul>



        <x-slot:pageTitle>All Blogpost</x-slot:pageTitle>
    <main class="flex-auto">
        <div class="mt-16 sm:mt-32 sm:px-8">
            <div class="mx-auto w-full max-w-7xl">
                <div class="relative px-8">
                    <div class="mx-auto max-w-2xl">
                        <header class="max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">Writing on software design, company building, and the aerospace industry.</h1>
                            <p class="mt-6 text-base text-zinc-600">All of my long-form thoughts on programming, leadership, product design, and more, collected in chronological order.</p>
                        </header>
                        <div class="mt-16">
                            <div class="md:border-l md:border-zinc-100 md:pl-6">
                                <div class="-mx-4 flex max-w-3xl flex-col space-y-4 md:mx-0">
                                    @forelse($blogPosts as $blogPost)
                                        <x-blogPost-card :job="$blogPost" />
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        @forelse($blogPosts as $blogPost)
            <x-blogPost-card :blog-Post="$blogPost" />
        @empty
            <div class="rounded-lg shadow-md bg-white p-4">{{$blogPost->title}}</div>
        @endforelse
    </div>
    </x-fund-fairy-layout>
