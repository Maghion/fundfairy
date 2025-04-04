
<x-fund-fairy-layout>
    <h2 class='text-xl font-semibold mt-6'>Comments</h2>
        <ul class='mt-4 space-y-4'>
                <li class='p-4 border rounded-lg shadow-sm'>
                    <p class='font-semibold'>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</p>
                    <p class='text-fuchsia-600'>{{ $comment->comment }}</p>
                    <p class='text-sm text-fuchsia-600'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>
                </li>
        </ul>
</x-fund-fairy-layout>


