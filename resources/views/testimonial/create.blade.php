<x-fund-fairy-layout>
<x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/testimonial" method="POST">
        @csrf
        <input type="text" name="description" placeholder="Description" 	value="{{ old('description') }}">

        <!-- Error Message for Description -->
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <input type="checkbox" name="status" placeholder="Status"
               value="{{ old('status') }}">
        <!-- Error Message for Status -->
        @error('status')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <input type="checkbox" name="featured" placeholder="Featured"
               value="{{ old('featured') }}">
        <!-- Error Message for Featured -->
        @error('featured')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror


        <button type="submit">Submit</button>
    </form>

</x-fund-fairy-layout>
