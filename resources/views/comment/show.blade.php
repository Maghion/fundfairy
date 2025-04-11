
<x-fund-fairy-layout>
    <h2 class='text-xl font-semibold mt-6'>Comments</h2>
    <div class="mt-4 pl-6 border-l-4 border-fuchsia-300 bg-fuchsia-50 rounded-md">
        <ul class='mt-4 space-y-4'>
            <li class="p-4 border rounded-lg shadow-sm bg-white">
                <p class='font-semibold'>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</p>
                <p class='text-fuchsia-600'>{{ $comment->comment }}</p>
                <p class='text-sm text-fuchsia-600'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>
            </li>
        </ul>
    </div>
</x-fund-fairy-layout>

