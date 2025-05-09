<x-fund-fairy-layout>
    @php
        $totalDonated = $donationRequest->donations->sum('amount');
        $goal = $donationRequest->funding_goal;
        $progress = $goal > 0 ? min(($totalDonated / $goal) * 100, 100) : 0;
    @endphp
    <x-slot name="title">{{ $title }}</x-slot>
    <x-page-title>{{ $title }}</x-page-title>

    <div class="border rounded-lg p-4 shadow-md bg-white">
        <h2 class="text-lg font-bold">{{ $donationRequest->business->name }}</h2>
        <p class="text-sm text-gray-600">{{ $donationRequest->description }}</p>

        <div class="mt-2">
            <p><strong>Requested:</strong> ${{ $donationRequest->funding_goal }}</p>
            <p><strong>Raised:</strong> ${{ $donationRequest->donations->sum('amount') }}</p>

            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1 mb-5">
                <div class="bg-green-500 h-3 rounded-full" style="width: {{ $progress }}%;"></div>
            </div>
        </div>

        <!-- Donate Button -->
        <x-fund-fairy-button-link
            url="{{ route('donation.create', $donationRequest->id) }}"
            btnColor="bg-yellow-500"
            hoverClass="hover:!bg-yellow-600"
            textClass="text-white font-bold"
            class="mt-5 px-5 py-5 w-[180px] md:w-auto">
            Donate
        </x-fund-fairy-button-link>



        {{--donations--}}
        <div class="flex flex-col gap-4 my-6 ms-5">
            @forelse($donations as $donation)
                <x-fund-fairy-donation-card :donation="$donation"></x-fund-fairy-donation-card>
            @empty
                <p>No Donations Found</p>
            @endforelse
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $donations->withQueryString()->links('pagination::tailwind') }}
        </div>

        @auth
            <!-- Comment Button -->
            <x-fund-fairy-button-link
                url="{{ route('comment.create', $donationRequest->id) }}"
                btnColor="bg-fuchsia-700"
                hoverClass="hover:!bg-yellow-500"
                textClass="text-white font-bold"
                class="mt-5 mb-4 px-5 py-5 w-[180px] md:w-auto">
                Comment
            </x-fund-fairy-button-link>
        @endauth

        <!-- Comments -->
        <div class="mt-10 ">
            @guest
            <h2 class="text-2xl font-bold mb-6">Comments</h2>
            @endguest
            <ul class="space-y-6 max-w-3xl">
                @forelse ($comments as $comment)
                    <x-comment-card :comment="$comment"></x-comment-card>
                    @empty
                        <p class="text-gray-600 italic">There are no comments at this time. </p>
                @endforelse
            </ul>
                <div class="mt-6">
                    {{ $comments->withQueryString()->links('pagination::tailwind') }}
                </div>
        </div>
    </div>
</x-fund-fairy-layout>
