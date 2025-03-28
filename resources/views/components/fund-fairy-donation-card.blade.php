<x-fund-fairy-layout>
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$donation->user_id}} donated ${{ number_format($donation->amount, 2) }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $donation->message }}</p>
        <p class="mb-3 font-normal text-gray-700 text-sm dark:text-gray-400">{{ $donation->type }}</p>
    </div>
</x-fund-fairy-layout>
