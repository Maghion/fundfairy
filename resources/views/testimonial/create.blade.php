<x-fund-fairy-layout>
<x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/testimonial" method="POST">
        @csrf
        <textarea name="description" placeholder="Description">{{ old('description') }}</textarea>

        <!-- Error Message for Description -->
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <button type="submit">Submit</button>
    </form>

</x-fund-fairy-layout>
