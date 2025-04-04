@props(['donationRequest'])
<div class="border rounded-lg p-4 shadow-md bg-white">
    <div claas="flex items-center space-around gap-4">
        <img
            src="{{url('/images')}}"
            alt="{{$donationRequest->title}}"
            class="w-14"
        />
        <div>
            <h2 class="text-xl font-semibold"><a href="{{route('donation-requests.show', $donationRequest->id)}}">{{$donationRequest->title}}</a></h2>
            <div class="w-full bg-gray-200 rounded-full h-3 mt-1">
                <div class="bg-blue-500 h-3 rounded-full" style="width: {{ (150 / 500) * 100 }}%;"></div>
            </div>
            <p class="text-lg text-gray-500">{{Str::limit($donationRequest->description), 100}}</p>
        </div>
        <a href="{{ route('donation-requests.show', $donationRequest->id) }}" class="block mt-3 text-center bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-800">
            View Details
        </a>
        <a href="{{ route('donation-requests.show', $donationRequest->id) }}" class="block mt-3 text-center bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">
             Donate
        </a>
    </div>
</div>
