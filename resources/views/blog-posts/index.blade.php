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
</x-fund-fairy-layout>
