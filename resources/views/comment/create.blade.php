<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/comment" method="POST">
        @csrf
        <input type="text" name="comment" placeholder="Comment" />
        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>
