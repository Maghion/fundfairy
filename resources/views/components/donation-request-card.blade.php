@props(['donationRequest'])

@php
    $totalDonated = $donationRequest->donations->sum('amount');
    $goal = $donationRequest->funding_goal;
    $progress = $goal > 0 ? ($totalDonated / $goal) * 100 : 0;
@endphp

<div class="border rounded-lg p-4 shadow-md bg-white flex flex-col justify-between min-h-[14rem]">
        <div>
            <h2 class="text-xl font-semibold"><a href="{{route('donation-request.show', $donationRequest->id)}}" class="text-black hover:text-fuchsia-700 no-underline hover:no-underline">
                    {{ Str::limit($donationRequest->title, 40, '...') }}</a></h2>
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1 overflow-hidden">
                <div class="bg-green-500 h-3 rounded-full transition-all duration-300 ease-in-out" style="width: {{ min($progress, 100) }}%"></div>
            </div>
            <p class="text-lg text-gray-500">{{ Str::limit($donationRequest->description, 250, '...') }}

            </p>

        </div>
        <div class="flex flex-row gap-4 mt-4 justify-center">
            <a href="{{ route('donation-request.show', $donationRequest->id) }}" class="block mt-3 text-center bg-fuchsia-500 text-white px-4 py-2 rounded-lg hover:bg-fuchsia-800 hover:text-white hover:no-underline focus:no-underline">
                View Details
            </a>
            <a href="{{ route('donation.create', $donationRequest->id) }}" class="block mt-3 text-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 hover:text-white hover:no-underline focus:no-underline">
                Donate
            </a>

            @auth

                <form action="{{ route('bookmarks.store', $donationRequest->id) }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                        <i class="fa-solid fa-heart fa-2xl" style="color: fuchsia; margin-top: 1rem;"></i>
                    </button>
                </form>
            @else
                <button
                    type="button"
                    style="background: none; border: none; padding: 0; cursor: not-allowed;"
                    title="You must log in to bookmark!">
                    <i class="fa-solid fa-heart fa-2xl" style="color: fuchsia; margin-top: 1rem;"></i>
                </button>
            @endauth

        </div>

    </div>
