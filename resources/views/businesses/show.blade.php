<x-layout>
    <h1 class='text-2xl'>{{ $business->name }}</h1>
    <p>{{ $business->address1 }}</p>
    <p>{{ $business->address2 }}</p>
    <p>{{ $business->city }}</p>
    <p>{{ $business->state }}</p>
    <p>{{ $business->zip_code }}</p>
    <p>{{ $business->phone_number }}</p>
</x-layout>
