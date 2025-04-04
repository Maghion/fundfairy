<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">{{ $title }}</h1>
    <div class="flex justify-center items-center">
    <form action="/donation" method="POST" class="w-full max-w-lg">
        @csrf
    <div class="flex flex-wrap -mx-3 mb-6 mt-3">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                Amount
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="amount" placeholder="$5.00" value="{{ old('amount') }}">
            @error('amount')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 mt-2 md:mb-0">
        <h3 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Select Donation Type:</h3>
                <label>
                    <input type="radio" name="type" value="Singular" {{ old('type', 'Singular') == 'Singular' ? 'checked' : '' }}> One-time
                </label>
                <label>
                    <input type="radio" name="type" value="Weekly" {{ old('type') == 'Weekly' ? 'checked' : '' }}> Weekly
                </label>
                <label>
                    <input type="radio" name="type" value="Monthly" {{ old('type') == 'Monthly' ? 'checked' : '' }}> Monthly
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
                      placeholder="You got this!">{{ old('message') }}</textarea>
            @error('message')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 md:mb-0">
            <label>
                <input type="checkbox" name="anon" {{ old('anon') ? 'checked' : '' }}> Donate Anonymously
            </label>
            @error('anon')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-full px-3 mb-6 md:mb-0 flex justify-center items-center">
            <button class="shadow bg-purple-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded transition duration-200" type="submit">
                Donate
            </button>

        </div>
    </div>
</form>
    </div>
</x-fund-fairy-layout>


{{--<x-fund-fairy-layout>--}}
{{--    <x-slot name="title">{{ $title }}</x-slot>--}}
{{--    <h1>{{ $title }}</h1>--}}
{{--    <form action="/donation" method="POST">--}}
{{--        @csrf--}}

{{--        <input type="text" name="amount" placeholder="amount" value="{{ old('amount') }}">--}}
{{--        <!-- Error Message for Amount -->--}}
{{--            @error('amount')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}

{{--        <input type="text" name="message" placeholder="Message" value="{{ old('message') }}">--}}
{{--            <!-- Error Message for Message -->--}}
{{--            @error('message')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}

{{--        <label>--}}
{{--            <input type="checkbox" name="anon" {{ old('anon') ? 'checked' : '' }}> Donate Anonymously--}}
{{--        </label>--}}
{{--            <!-- Error Message for Anon -->--}}
{{--            @error('anon')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}

{{--        <h3>Select Donation Type:</h3>--}}
{{--        <label>--}}
{{--            <input type="radio" name="type" value="Singular" {{ old('type', 'Singular') == 'Singular' ? 'checked' : '' }}> One-time--}}
{{--        </label>--}}
{{--        <label>--}}
{{--            <input type="radio" name="type" value="Weekly" {{ old('type') == 'Weekly' ? 'checked' : '' }}> Weekly--}}
{{--        </label>--}}
{{--        <label>--}}
{{--            <input type="radio" name="type" value="Monthly" {{ old('type') == 'Monthly' ? 'checked' : '' }}> Monthly--}}
{{--        </label>--}}
{{--            <!-- Error Message for type -->--}}
{{--            @error('type')--}}
{{--            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>--}}
{{--            @enderror--}}

{{--        <button type="submit">Submit</button>--}}
{{--    </form>--}}

{{--</x-fund-fairy-layout>--}}


