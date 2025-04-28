@props(['donationRequest'])

@php
    $totalDonated = $donationRequest->donations->sum('amount');

    $goal = $donationRequest->funding_goal;
    $progress = $goal > 0 ? ($totalDonated / $goal) * 100 : 0;
@endphp

<div class="border rounded-lg p-4 shadow-md bg-white">
    <div class="flex flex-col items-center justify-around gap-4">

        <div>
            <h2 class="text-xl font-semibold"><a href="{{route('donation-request.show', $donationRequest->id)}}" class="text-black hover:text-fuchsia-700 no-underline hover:no-underline">
                    {{$donationRequest->title}}</a></h2>
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1 overflow-hidden">
                <div class="bg-green-500 h-3 rounded-full transition-all duration-300 ease-in-out" style="width: {{ min($progress, 100) }}%"></div>
            </div>
            <p class="text-lg text-gray-500">{{Str::limit($donationRequest->description), 100}}</p>

        </div>
        <div class="flex flex-row gap-4">
            <a href="{{ route('donation-request.show', $donationRequest->id) }}" class="block mt-3 text-center bg-fuchsia-500 text-white px-4 py-2 rounded-lg hover:bg-fuchsia-800 hover:text-white hover:no-underline focus:no-underline">
                View Details
            </a>
            <a href="{{ route('donation.create', $donationRequest->id) }}" class="block mt-3 text-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 hover:text-white hover:no-underline focus:no-underline">
                Donate
            </a>

        </div>

    </div>
</div>

