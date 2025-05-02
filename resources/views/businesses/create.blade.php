<x-fund-fairy-layout>
    <div class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl">
        <h2 class="text-4xl text-center font-bold mb-4">Create Business</h2>

        <!-- Form Start -->
        <form method="POST" action="{{ route('businesses.store') }}" enctype="multipart/form-data">
            @csrf

            <h2 class="text-2xl font-bold mb-6 text-center text-gray-500">Business Info</h2>

            <!-- Business Name -->
            <div class="mb-4">
                <label class="block text-gray-700" for="name">Business Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('name') border-red-500 @enderror"
                       placeholder="Enter Business Name" />
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Business Description -->
            <div class="mb-4">
                <label class="block text-gray-700" for="description">Business Description</label>
                <textarea cols="30" rows="7" id="description" name="description"
                          class="w-full px-4 py-2 border rounded focus:outline-none @error('description') border-red-500 @enderror"
                          placeholder="Enter Business Description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address 1 -->
            <div class="mb-4">
                <label class="block text-gray-700" for="address1">Address</label>
                <input id="address1" type="text" name="address1" value="{{ old('address1') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('address1') border-red-500 @enderror"
                       placeholder="123 Main St" />
                @error('address1')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Address 2 -->
            <div class="mb-4">
                <label class="block text-gray-700" for="address2">Address 2 (Optional)</label>
                <input id="address2" type="text" name="address2" value="{{ old('address2') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('address2') border-red-500 @enderror"
                       placeholder="Apt 4B" />
                @error('address2')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- City -->
            <div class="mb-4">
                <label class="block text-gray-700" for="city">City</label>
                <input id="city" type="text" name="city" value="{{ old('city') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('city') border-red-500 @enderror"
                       placeholder="Albany" />
                @error('city')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- State -->
            <div class="mb-4">
                <label class="block text-gray-700" for="state">State</label>
                <input id="state" type="text" name="state" value="{{ old('state') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('state') border-red-500 @enderror"
                       placeholder="NY" />
                @error('state')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- ZIP Code -->
            <div class="mb-4">
                <label class="block text-gray-700" for="zip_code">ZIP Code</label>
                <input id="zip_code" type="text" name="zip_code" value="{{ old('zip_code') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('zip_code') border-red-500 @enderror"
                       placeholder="12201" />
                @error('zip_code')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="mb-4">
                <label class="block text-gray-700" for="phone_number">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none @error('phone_number') border-red-500 @enderror"
                       placeholder="Enter phone" />
                @error('phone_number')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none">
                Save
            </button>
        </form>
        <!-- Form End -->

    </div>
</x-fund-fairy-layout>

