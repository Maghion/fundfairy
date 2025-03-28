<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/donation" method="POST">
        @csrf

        <input type="text" name="amount" placeholder="amount" value="{{ old('amount') }}">
        <!-- Error Message for Amount -->
            @error('amount')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror

        <input type="text" name="message" placeholder="Message" value="{{ old('message') }}">
            <!-- Error Message for Message -->
            @error('message')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror

        <label>
            <input type="checkbox" name="anon" {{ old('anon') ? 'checked' : '' }}> Donate Anonymously
        </label>
            <!-- Error Message for Anon -->
            @error('anon')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror

        <h3>Select Donation Type:</h3>
        <label>
            <input type="radio" name="type" value="Singular" {{ old('type', 'Singular') == 'Singular' ? 'checked' : '' }}> One-time
        </label>
        <label>
            <input type="radio" name="type" value="Weekly" {{ old('type') == 'Weekly' ? 'checked' : '' }}> Weekly
        </label>
        <label>
            <input type="radio" name="type" value="Monthly" {{ old('type') == 'Monthly' ? 'checked' : '' }}> Monthly
        </label>
            <!-- Error Message for type -->
            @error('type')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror

        <button type="submit">Submit</button>
    </form>

</x-fund-fairy-layout>


