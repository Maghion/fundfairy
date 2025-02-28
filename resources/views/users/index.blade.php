<x-fund-fairy-layout>
    <x-slot name="title">All Users</x-slot>
    <h1>{{$title}}</h1>
    <ul>
        @forelse($profiles as $profile)
            <li>{{ $profile }}</li>
        @empty
            <li>No user profiles Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>

