@props(['blogPost'])
<article class="md:grid md:grid-cols-4 md:items-baseline">
    <div class="relative isolate flex flex-col items-start rounded-2xl px-4 py-6 hover:bg-zinc-200/70 md:col-span-3">
        <h2 class="text-base font-semibold tracking-tight text-zinc-800">
            <a href="{{ route('blog-posts.show', $blogPost) }}">
                <span class="absolute inset-0 z-10"></span>
                {{$blogPost->title}}
            </a>
        </h2>

        <time class="relative order-first mb-3 flex items-center pl-3.5 text-sm text-zinc-400 md:hidden">
            <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
                <span class="h-4 w-0.5 rounded-full bg-zinc-200"></span>
            </span>
            {{$blogPost->updated_at}}
        </time>

        <p class="mt-2 text-sm text-zinc-600">
            {{$blogPost->content}}
        </p>

        <div class="mt-4 flex items-center gap-4">
            <div aria-hidden="true" class="text-sm font-medium text-teal-500">
                Read post
            </div>

    </div>

    <time class="order-first hidden text-sm text-zinc-400 md:block">
        {{$blogPost->updated_at}}
    </time>


</article>
