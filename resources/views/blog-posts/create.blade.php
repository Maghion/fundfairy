<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/blog-posts" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        <!-- Error Message for Title -->
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" name="content" placeholder="content" value="{{ old('content') }}">
        <!-- Error Message for Description -->
        @error('content')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>


