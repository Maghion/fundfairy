<x-fund-fairy-layout>
    <x-slot name="title">{{$title}}</x-slot>
    <h1>{{$title}}</h1>
    <ul>
        @forelse($users as $user)
            <li>{{ $user }}</li>
        @empty
            <li>No users Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>

