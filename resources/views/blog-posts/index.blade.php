<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($blogPosts as $blogPost)
            <li>{{ $blogPost}}</li>
        @empty
            <li>No blog posts found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
