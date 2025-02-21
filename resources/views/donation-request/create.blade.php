<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/donation-request" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" />
        <input type="text" name="description" placeholder="Description" />
        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>
