<x-fund-fairy-layout>
    <div class="container mx-auto p-4 flex flex-col lg:flex-row gap-6">

        <div class="flex-1 space-y-6">

            {{-- Section 1 --}}
            <section class="rounded-lg shadow-md bg-white p-3">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $business->name }}</h2>
                    <p class="text-gray-700 text-lg mt-2">
                        {{ $business->business_description }}
                    </p>
                </div>
            </section>

            {{-- Section 2 --}}
            <div>
                <!-- Create Button -->
                <div class="flex justify-left my-6" >
                    @auth
                        <x-fund-fairy-button-link
                            url="{{ route('business-review.create', $business->id) }}"
                        >
                            Create a business review
                        </x-fund-fairy-button-link>
                    @endauth
                </div>
            <!-- End create Button -->

{{--                //no connected--}}
{{--                <section class="rounded-lg shadow-md bg-white p-4">--}}
{{--                    <h2 class="text-xl font-semibold mb-4">Customer Reviews</h2>--}}
{{--                    <div class= "border-b pb-4 mb-4">--}}
{{--                        @forelse($businessReviews as $businessReview)--}}
{{--                            <x-business-review-card :businessReview="$businessReview"></x-business-review-card>--}}
{{--                        @empty--}}
{{--                            <p>No review Found</p>--}}
{{--                        @endforelse--}}
{{--                    </div>--}}

{{--                </section>--}}


                    <section class="rounded-lg shadow-md bg-white p-4">
                    <h2 class="text-xl font-semibold mb-4">Customer Reviews</h2>
                    @if($business->businessReviews->count())
                        <div class="space-y-6">
                            @foreach($business->businessReviews as $review)
                                <div class="border-b pb-4 mb-4">
                                    <h3 class="text-lg font-bold text-blue-600">{{ $review->title }}</h3>
                                    <wa-rating label="Rating" readonly value="{{ $review->rating }}"></wa-rating>
                                    <p class="text-gray-700">{{ $review->comment }}</p>
                                    <p class="text-sm text-gray-500">Posted by User ID: {{ $review->user_id }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-gray-500 italic">No reviews yet for this business.</p>
                    @endif
                </section>
            </div>

        </div>

{{--            <section class="rounded-lg shadow-md bg-white p-4">--}}
{{--                <h2 class="text-xl font-semibold mb-4">Customer Reviews</h2>--}}
{{--                <div class= "border-b pb-4 mb-4">--}}
{{--                    @forelse($businessReviews as $businessReview)--}}
{{--                        <x-business-review-card :businessReview="$businessReview"></x-business-review-card>--}}
{{--                    @empty--}}
{{--                        <p>No review Found</p>--}}
{{--                    @endforelse--}}
{{--                </div>--}}

{{--            </section>--}}


        {{-- Section 3 --}}
        <aside class="w-full lg:w-1/4 bg-white rounded-lg shadow-md p-3">
            <h3 class="text-xl text-center mb-4 font-bold">Business Info</h3>

            <ul class="my-4 bg-gray-100 p-4">
                <li class="mb-2"><strong>Phone Number:</strong> {{ $business->phone_number }}</li>
                <li class="mb-2"><strong>Location:</strong> {{ $business->city }}, {{ $business->state }}</li>
                <li class="mb-2"><strong>Address:</strong> {{ $business->address1 }} {{ $business->address2 }}</li>
                <li class="mb-2"><strong>Zip Code:</strong> {{ $business->zip_code }}</li>
                <br>
                @auth @if (auth()->user()->id === $business->user_id)
                    @can('update', $business)
                    <div class="flex space-x-3 ml-4">
                        <a
                            href="{{ route('businesses.edit', $business->id) }}"
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-300 text-white rounded"
                        >Edit</a>
                        <!-- Delete Form -->
                        <form
                            method="POST"
                            action="{{ route('businesses.destroy', $business->id) }}"
                            onsubmit="return confirm('Are you sure you want to delete this business?');"
                        >
                            @csrf @method('DELETE')
                            <button
                                type="submit"
                                class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
                            >
                                Delete
                            </button>
                        </form>
                        <!-- End Delete Form -->
                    </div>
                    @endcan
                @endif @endauth
            </ul>

        </aside>

    </div>

    {{-- Back to All Businesses Link --}}
    <div class="mt-8 mb-2">
        <a href="{{ route('businesses.index') }}" class="block text-xl text-center text-blue-600 hover:underline">
            <i class="fa fa-arrow-alt-circle-left"></i> Back to All Businesses
        </a>
    </div>

</x-fund-fairy-layout>
