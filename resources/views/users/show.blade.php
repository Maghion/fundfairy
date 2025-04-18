<x-fund-fairy-layout>
    <x-slot name="title">{{$title}}</x-slot>
    <h1 class='text-2xl'>{{ $user->email }}</h1>
    <img
        src="/storage/{{$user->avatar}}"
        alt="{{$user->first_name}} {{$user->last_name}}"
        class="w-full rounded-lg mb-4 m-auto"
        />
</x-fund-fairy-layout>
