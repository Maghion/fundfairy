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
                                    <article class="md:grid md:grid-cols-4 md:items-baseline">
                                        <div class="relative isolate flex flex-col items-start rounded-2xl px-4 py-6 hover:bg-zinc-200/70 md:col-span-3">
                                            <h2 class="text-base font-semibold tracking-tight text-zinc-800">
                                                <a href="#">
                                                    <span class="absolute inset-0 z-10"></span>
                                                    Crafting a design system for a multiplanetary future
                                                </a>
                                            </h2>
                                            <time class="relative order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 md:hidden" datetime="2022-09-05">
                                                <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200"></span></span>
                                                September 5, 2022
                                            </time>
                                            <p class="mt-2 text-sm text-zinc-600">
                                                Most companies try to stay ahead of the curve when it comes to visual design, but for Planetaria we needed to create a brand that would still inspire us 100 years from now when humanity has spread across our
                                                entire solar system.
                                            </p>
                                            <div aria-hidden="true" class="mt-4 flex items-center text-sm font-medium text-teal-500">Read article &rarr;</div>
                                        </div>
                                        <time class="order-first hidden text-sm text-zinc-400 md:block" datetime="2022-09-05">September 5, 2022</time>
                                    </article>

                                    <article class="md:grid md:grid-cols-4 md:items-baseline">
                                        <a href="#" class="flex flex-col items-start rounded-2xl px-4 py-6 hover:bg-zinc-200/70 md:col-span-3">
                                            <h2 class="text-base font-semibold tracking-tight text-zinc-800">Introducing Animaginary: High performance web animations</h2>
                                            <time class="relative order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 md:hidden" datetime="2022-09-02">
                                                <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200"></span></span>
                                                September 2, 2022
                                            </time>
                                            <p class="mt-2 text-sm text-zinc-600">
                                                When you’re building a website for a company as ambitious as Planetaria, you need to make an impression. I wanted people to visit our website and see animations that looked more realistic than reality itself.
                                            </p>
                                            <div aria-hidden="true" class="mt-4 flex items-center text-sm font-medium text-teal-500">Read article &rarr;</div>
                                        </a>
                                        <time class="order-first hidden text-sm text-zinc-400 md:block" datetime="2022-09-02">September 2, 2022</time>
                                    </article>

                                    <article class="md:grid md:grid-cols-4 md:items-baseline">
                                        <a href="#" class="flex flex-col items-start rounded-2xl px-4 py-6 hover:bg-zinc-200/70 md:col-span-3">
                                            <h2 class="text-base font-semibold tracking-tight text-zinc-800">Rewriting the cosmOS kernel in Rust</h2>
                                            <time class="relative order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 md:hidden" datetime="2022-07-14">
                                                <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200"></span></span>
                                                July 14, 2022
                                            </time>
                                            <p class="mt-2 text-sm text-zinc-600">
                                                When we released the first version of cosmOS last year, it was written in Go. Go is a wonderful programming language, but it’s been a while since I’ve seen an article on the front page of Hacker News about
                                                rewriting some important tool in Go and I see articles on there about rewriting things in Rust every single week.
                                            </p>
                                            <div aria-hidden="true" class="mt-4 flex items-center text-sm font-medium text-teal-500">Read article &rarr;</div>
                                        </a>
                                        <time class="order-first hidden text-sm text-zinc-400 md:block" datetime="2022-07-14">July 14, 2022</time>
                                    </article>
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
