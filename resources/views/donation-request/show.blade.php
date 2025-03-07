<x-workopia-layout>
    <h1 class='text-2xl'>{{ $donationRequest->title }}</h1>
    <p>{{ $donationRequest ->user_id}}</p>
    <p>{{ $donationRequest->description }}</p>
    <p>{{ $donationRequest ->status}}</p>
    <p>{{ $donationRequest ->funding_goal}}</p>
    <p>{{ $donationRequest ->featured}}</p>

</x-workopia-layout>
