<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">{{ $title }}</h1>
    <div class="flex justify-center items-center">
        <form
            class="w-full max-w-lg"
            method="POST"
            action="{{ route('donation.update', $donation->id) }}"
            enctype="multipart/form-data"
        >
            @csrf
            @method("PUT")
    <div class="flex flex-wrap -mx-3 mb-6 mt-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Amount
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="amount" placeholder="$5.00"
                   value="{{ old('amount', $donation->amount) }}">
            @error('amount')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 mt-2 md:mb-0">
        <h3 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Select Donation Type:</h3>
                <label>
                    <input type="radio" name="type" value="Singular" {{ old('type', $donation->type) == 'Singular' ? 'checked' : '' }}> One-time
                </label>
                <label>
                    <input type="radio" name="type" value="Weekly" {{ old('type', $donation->type) == 'Weekly' ? 'checked' : '' }}> Weekly
                </label>
                <label>
                    <input type="radio" name="type" value="Monthly" {{ old('type', $donation->type) == 'Monthly' ? 'checked' : '' }}> Monthly
                </label>
                    @error('type')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
        </div>

        <div class="w-full px-3 mb-6 mt-3 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                Message
            </label>
            <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white resize-none h-32"
                      id="grid-message"
                      name="message"
                      placeholder="You got this!"
            >{{ old('message', $donation->message) }}</textarea>
            @error('message')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 md:mb-0">
            <label>
                <input type="hidden" name="anon" value="0">
                <input type="checkbox" name="anon" value="1" {{ old('anon', $donation->anon) ? 'checked' : '' }}> Donate Anonymously
            </label>
            @error('anon')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 md:mb-0 flex justify-center items-center">
            <button class="shadow bg-purple-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded transition duration-200" type="submit">
                Edit
            </button>

        </div>
    </div>
</form>
    </div>
</x-fund-fairy-layout>

