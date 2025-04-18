@props(['donation'])


<div class="border rounded-lg p-4 shadow-md bg-white">
    <div class="flex flex-col items-center justify-around gap-4">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $donation->anon }} ? 'Anonymous' : {{ $donation->user->first_name }} {{ $donation->user->last_name }} donated ${{ number_format($donation->amount, 2) }}</h5>
    </div>
</div>









{{-- <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">--}}
{{--            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $donation->anon }} ? 'Anonymous' : {{ $donation->user->first_name }} {{ $donation->user->last_name }} donated ${{ number_format($donation->amount, 2) }}</h5>--}}
{{--        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $donation->message }}</p>--}}
{{--        <p class="mb-3 font-normal text-gray-700 text-sm dark:text-gray-400">{{ $donation->type }}</p>--}}
{{--    </div>--}}
