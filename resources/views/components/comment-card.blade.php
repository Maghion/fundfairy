@props(['comment', 'donationRequest', 'user', 'business'])

{{--<x-fund-fairy-layout>--}}
{{--    <h1 class='text-2xl font-bold'>{{ $donationRequest->title }}</h1>--}}
{{--        <p class='mb-4'>{{ $donationRequest->description }}</p>--}}

{{--    <div class="mt-6">--}}
{{--        <h2 class='text-xl font-semibold mt-6'>Donation Activity</h2>--}}

{{--        @auth--}}
{{--            @if ($user->hasDonatedTo($donationRequest))--}}
{{--                <p class="text-sm mt-2">If you donated to this project, you can leave a comment for {{ $donationRequest->user->first_name }}.</p>--}}
{{--           @endif--}}
{{--           @else--}}
{{--                --}}{{--not sure we need to have users sign in, might need to remove the following line:--}}
{{--                <p class="text-sm mt-2">If you donated to this project, you can <a href="{{ route('login') }}" class="text-blue-600 underline">sign in</a> to leave a comment.</p>--}}
{{--        @endauth--}}
{{--    </div>--}}

{{--    @if ($donationRequest->comments->isEmpty())--}}
{{--        <p class="mt-4 text-fuchsia-500">No comments yet.</p>--}}
{{--    @else--}}
{{--        <ul class="mt-4 space-y-6">--}}
{{--            @foreach ($donationRequest->comments->sortByDesc('created_at') as $comment)--}}
<div class="flex justify-between max-w-2xl gap-4">
    <!-- Comment Content -->
    <li class="flex-1 px-3 py-2 border border-fuchsia-600 border-dotted rounded-md shadow bg-fuchsia-50 font-sans text-sm">
        <div class="flex items-center justify-between mb-1">
            <p class="font-medium text-fuchsia-950">
                {{ $comment->user->first_name ?? 'Anonymous' }} {{ $comment->user->last_name ?? '' }} ...
            </p>
            <p class="text-xs text-fuchsia-700">
                {{ $comment->created_at->diffForHumans() }}
            </p>
        </div>
        <p class="pl-2 text-fuchsia-900 italic font-serif leading-snug">
            "{{ $comment->comment }}"
        </p>
    </li>

    <!-- Buttons -->
    @auth
        @if (auth()->id() === $comment->user_id)
            <div class="flex flex-col justify-start gap-2">
                <a href="{{ route('comment.edit', $comment->id) }}"
                   class="px-3 py-1 text-sm font-medium text-white bg-fuchsia-700 rounded hover:bg-fuchsia-900 hover:text-white hover:no-underline focus:no-underline text-center">
                    Edit
                </a>

                <form action="{{ route('comment.destroy', $comment->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this comment?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            class="px-3 py-1 text-sm font-medium text-white bg-yellow-500 rounded hover:bg-red-700 w-full">
                        Delete
                    </button>
                </form>
            </div>
        @endif
    @endauth
</div>

{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
{{--</x-fund-fairy-layout>--}}
