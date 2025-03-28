<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>

    <form action="//donation-request" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">
        <!-- Error Message for Title -->
        @error('title')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror
        <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
        <!-- Error Message for Description -->
        @error('description')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <select name="status" class="w-full p-2 border rounded">
            <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Complete" {{ old('status') == 'Complete' ? 'selected' : '' }}>Closed</option>
        </select>
        @error('status')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror


        <input type="number" name="funding_goal" placeholder="funding_goal" value="{{ old('funding_goal') }}">
        <!-- Error Message for Description -->
        @error('funding_goal')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror

        <select name="featured" class="w-full p-2 border rounded">
            <option value="true" {{ old('featured') == 'True' ? 'selected' : '' }}>Yes</option>
            <option value="false" {{ old('featured') == 'false' ? 'selected' : '' }}>No</option>
        </select>
        @error('featured')
        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
        @enderror


        <button type="submit" class="w-full p-2 bg-blue-600 text-white rounded">Submit</button>
    </form>

</x-fund-fairy-layout>


