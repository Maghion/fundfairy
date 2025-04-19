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
                <li class="p-4 border border-fuchsia-200 rounded-lg shadow-sm bg-white">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-fuchsia-800">
                            {{ $comment->user->first_name }} {{ $comment->user->last_name }}
                        </p>
                        <p class="text-sm text-fuchsia-500">
                            {{ $comment->created_at->diffForHumans() }}
                        </p>
                    </div>
                    <p class="mt-2 text-fuchsia-800 whitespace-pre-line">
                        {{ $comment->comment }}
                    </p>
                </li>
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    @endif--}}
{{--</x-fund-fairy-layout>--}}
