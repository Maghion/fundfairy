<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <ul class="mt-4 space-y-4 pl-10 border-l-4 border-fuchsia-300 bg-fuchsia-50 rounded-md">
        @forelse($comments as $comment)
            <li class="p-4 bg-white border rounded-lg shadow-sm">
                <a href="{{ route('comment.show', $comment->id) }}" class="text-fuchsia-900 font-semibold hover:underline">
                    {{ $comment->title }}
                </a>
                <p class="mt-2 italic text-gray-700 pl-4">
                    "{{ $comment->comment }}"
                </p>
                <p class='mt-2 text-sm text-fuchsia-950 font-bold'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>
            </li>
        @empty
            <li class="p-4 text-gray-600">No comment found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>
