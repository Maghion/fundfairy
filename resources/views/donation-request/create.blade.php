<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">{{ $title }}</h1>

    <div class="flex justify-center items-center">
        <form action="/donation-request" method="POST" class="w-full max-w-lg">
            @if ($errors->has('business_id'))
                <div class="text-red-500 text-sm mb-4 text-center">
                    {{ $errors->first('business_id') }}
                </div>
            @endif

            @csrf

            <div class="flex flex-wrap -mx-3 mb-6 mt-3">
                {{-- Title --}}
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                        Title
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('title') border-red-500 @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                           id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Request Title">
                    @error('title')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Description --}}
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                        Description
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('description') border-red-500 @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                           id="description" type="text" name="description" value="{{ old('description') }}" placeholder="Brief description">
                    @error('description')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Funding Goal --}}
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="funding_goal">
                        Funding Goal
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('funding_goal') border-red-500 @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                           id="funding_goal" type="number" name="funding_goal" value="{{ old('funding_goal') }}" placeholder="1000">
                    @error('funding_goal')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="status">
                        Status
                    </label>
                    <select class="block w-full bg-gray-200 text-gray-700 border @error('status') border-red-500 @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="status" name="status">
                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Complete" {{ old('status') == 'Complete' ? 'selected' : '' }}>Closed</option>
                    </select>
                    @error('status')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Featured --}}
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="featured">
                        Featured
                    </label>
                    <select class="block w-full bg-gray-200 text-gray-700 border @error('featured') border-red-500 @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                            id="featured" name="featured">
                        <option value="1" {{ old('featured') == 'true' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old('featured') == 'false' ? 'selected' : '' }}>No</option>
                    </select>
                    @error('featured')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="w-full px-3 mb-6 flex justify-center items-center">
                    <button class="shadow bg-purple-500 hover:bg-pink-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded transition duration-200" type="submit">
                        Submit Request
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-fund-fairy-layout>
