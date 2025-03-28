
<x-fund-fairy-layout>
    <h1 class='text-2xl font-bold'>{{ $donationRequest->title }}</h1>
    <p class='mb-4'>{{ $donationRequest->description }}</p>

    <h2 class='text-xl font-semibold mt-6'>Comments</h2>

    @if ($donationRequest->comments->isEmpty())
        <p class='text-gray-500'>No comments yet.</p>
    @else
        <ul class='mt-4 space-y-4'>
            @foreach ($donationRequest->comments as $comment)
                <li class='p-4 border rounded-lg shadow-sm'>
                    <p class='font-semibold'>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</p>
                    <p class='text-gray-700'>{{ $comment->comment }}</p>
                    <p class='text-sm text-gray-500'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</x-fund-fairy-layout>


