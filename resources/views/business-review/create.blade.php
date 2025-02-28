<x-fund-fairy-layout>
    <x-slot name="title"> [{{$title}}]</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/business-review" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" />
        <input type="text" name="rating" placeholder="Rating" />
        <input type="text" name="comment" placeholder="Comment" />
        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>
