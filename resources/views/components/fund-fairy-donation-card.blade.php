@props(['donation'])


<div class="border rounded-lg p-4 border-none w-full">
    <div class="flex flex-row items-center gap-4">
        <div class="w-16 h-16 bg-fuchsia-100 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-hand-holding-dollar text-4xl text-fuchsia-400"></i>
        </div>        <div class="flex flex-col">
            <h5 class="mb-1 text-xl font-bold text-gray-900">
                {{ $donation->anon ? 'Anonymous' : $donation->user->first_name . ' ' . $donation->user->last_name }}
                donated ${{ number_format($donation->amount, 2) }}
            </h5>
            <p class="mb-1 text-gray-800">{{ $donation->message }}</p>
            <p class="text-sm text-gray-500">{{ $donation->created_at->format('M d, Y h:i A') }}</p>
        </div>
    </div>
</div>

{{-- <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">--}}
{{--            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $donation->anon }} ? 'Anonymous' : {{ $donation->user->first_name }} {{ $donation->user->last_name }} donated ${{ number_format($donation->amount, 2) }}</h5>--}}
{{--        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $donation->message }}</p>--}}
{{--        <p class="mb-3 font-normal text-gray-700 text-sm dark:text-gray-400">{{ $donation->type }}</p>--}}
{{--    </div>--}}
