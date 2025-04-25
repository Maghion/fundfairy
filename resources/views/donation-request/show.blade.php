<x-fund-fairy-layout>
    @php
        $totalDonated = $donationRequest->donations->sum('amount');

        $goal = $donationRequest->funding_goal;
        $progress = $goal > 0 ? ($totalDonated / $goal) * 100 : 0;
    @endphp

    <div class="border rounded-lg p-4 shadow-md bg-white">
        <h2 class="text-lg font-bold">{{ $donationRequest->business->name }}</h2>
        <p class="text-sm text-gray-600">{{ $donationRequest->description }}</p>

        <div class="mt-2">
            <p><strong>Requested:</strong> ${{ $donationRequest->funding_goal }}</p>
            <p><strong>Raised:</strong> ${{ $donationRequest->donations->sum('amount') }}</p>

            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                <div class="bg-blue-500 h-3 rounded-full" style="width: {{ ($donationRequest->donations->sum('amount') / $donationRequest->funding_goal) * 100 }}%;"></div>
            </div>
        </div>

        <!-- Comments -->
        <div class="mt-3 ">
            <h3 class="text-lg font-semibold text-fuchsia-800 mb-1">Comments</h3>
            <ul class="space-y-2 text-base text-gray-800 ">
                @forelse ($comments as $comment)
                    <x-comment-card :comment="$comment"></x-comment-card>
                    @empty
                        <p class="text-gray-600 italic">There are no comments at this time. </p>
                @endforelse
            </ul>
        </div>

{{--        donations--}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
            @forelse($donations as $donation)
                <x-fund-fairy-donation-card :donation="$donation"></x-fund-fairy-donation-card>
            @empty
                <p>No Donations Found</p>
            @endforelse
        </div>

        <!-- Donate Button -->
        <button class="bg-green-500 text-white px-4 py-2 mt-3 rounded-lg hover:bg-green-600">
            Donate Now
        </button>
    </div>
</x-fund-fairy-layout>
