
<x-fund-fairy-layout>
    <h2 class='text-xl font-semibold mt-6'>Comments</h2>

    @if ($donationRequest->comments->isEmpty())
        <p class='text-purple-500'>No comments yet.</p>
    @else
        <ul class='mt-4 space-y-4'>
                <li class='p-4 border rounded-lg shadow-sm'>
                    <p class='font-semibold'>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</p>
                    <p class='text-purple-700'>{{ $comment->comment }}</p>
                    <p class='text-sm text-purple-500'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>
                </li>
        </ul>
    @endif
</x-fund-fairy-layout>


