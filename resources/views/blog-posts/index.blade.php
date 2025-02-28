<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <ul>
        @forelse($blogPosts as $blogPost)
            <li>{{ $blogPostsRequest }}</li>
        @empty
            <li>No blog post requests found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
