<x-fund-fairy-layout>
    <div class="border rounded-lg p-4 shadow-md bg-white">
        <h2 class="text-lg font-bold">{{ $businessName }}</h2>
        <p class="text-sm text-gray-600">{{ $description }}</p>

        <div class="mt-2">
            <p><strong>Requested:</strong> ${{ $funding_goal }}</p>
            <p><strong>Raised:</strong> ${{ $funded }}</p>

            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                <div class="bg-blue-500 h-3 rounded-full" style="width: {{ ($funded / $funding_goal) * 100 }}%;"></div>
            </div>
        </div>

        <!-- Comments -->
        <div class="mt-3">
            <h3 class="text-sm font-semibold">Comments</h3>
            <ul class="text-xs text-gray-700">
                @foreach ($comments as $comment)
                    <li class="border-b py-1">{{ $comment }}</li>
                @endforeach
            </ul>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
            @forelse($donations as $donation)
                <x-donation-card :donation="$donation"></x-donation-card>
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
