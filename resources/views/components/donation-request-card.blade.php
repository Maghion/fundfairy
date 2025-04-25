@props(['donationRequest'])

@php
    $totalDonated = $donationRequest->donations->sum('amount');

    $goal = $donationRequest->funding_goal;
    $progress = $goal > 0 ? ($totalDonated / $goal) * 100 : 0;
@endphp

<div class="border rounded-lg p-4 shadow-md bg-white">
    <div class="flex flex-col items-center justify-around gap-4">

        <div>
            <h2 class="text-xl font-semibold"><a href="{{route('donation-request.show', $donationRequest->id)}}">{{$donationRequest->title}}</a></h2>
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                <div class="bg-green-500 h-4 rounded-full" style="width: {{ $progress }}%"></div>

            </div>
            <p class="text-lg text-gray-500">{{Str::limit($donationRequest->description), 100}}</p>

        </div>
        <div class="flex flex-row gap-4">
            <a href="{{ route('donation-request.show', $donationRequest->id) }}" class="block mt-3 text-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
                View Details
            </a>
            <a href="{{ route('donation.create', $donationRequest->id) }}" class="block mt-3 text-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
                Donate
            </a>

            @auth
                <form action="{{ route('bookmarks.store', $donationRequest->id) }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                        <i class="fa-solid fa-heart fa-2xl" style="color: red;"></i>
                    </button>
                </form>
            @else
                <button
                    type="button"
                    style="background: none; border: none; padding: 0; cursor: not-allowed;"
                    title="You must log in to bookmark!">
                    <i class="fa-solid fa-heart fa-2xl" style="color: red;"></i>
                </button>
            @endauth

        </div>

    </div>
</div>

