@props(['testimonial'])
<div class="mx-auto flex flex-col gap-y-10 justify-stretch items-stretch  w-full">
    <div class="rounded-lg bg-white p-8 shadow-2xl border-4 border-fuchsia-950 flex flex-col">
        @if($testimonial->testimonial_image)
            <img class="w-20 h-20 rounded-full bg-gray-800 object-cover shadow-2xl border-4 border-violet-600 mx-auto"
                 src="{{ asset('storage/' . $testimonial->testimonial_image) }}"
                 alt="{{ $testimonial->user->first_name }} {{ $testimonial->user->last_name }}" />
        @else
            <img class="w-20 h-20 rounded-full bg-gray-800 object-cover shadow-2xl border-4 border-violet-600 mx-auto"
                 src="{{ asset('storage/testimonials/no_users.png') }}"
                 alt="Default image" />
        @endif

        {{-- dipslay the user name before the testimonial description--}}
                <div class="text-center mt-4">
                    <strong class="text-black text-lg">
                        @if($testimonial->user && $testimonial->user->first_name && $testimonial->user->last_name)
                            {{ $testimonial->user->first_name }} {{ $testimonial->user->last_name }}
                        @else
                            Anonymous
                        @endif
                    </strong>
                </div>

                <figure class="relative isolate pt-6 flex-1">
                    <blockquote class="text-xl text-black bg-gray-200 p-4 rounded min-h-[120px]">
                        <span class="absolute font-semibold text-8xl top-0 left-0 -translate-x-1/2 -translate-y-1/2 text-violet-600 ">“</span>
                        <p>{{ $testimonial->description }}</p>
                    </blockquote>
                </figure>

                <div class="flex justify-center mt-4 space-x-4">
                    @can('update', $testimonial)

                    <!-- Edit Button -->
                    <a href="{{ route('testimonial.edit', $testimonial->id) }}"
                       class="px-4 py-2 bg-gray-200 rounded-full
                       shadow-md transition duration-300 ease-in-out hover:no-underline hover:text-white hover:bg-gray-800 "
                       style="text-decoration: none;"
                    >Edit</a>

                    <!-- Delete Form -->
                    <form method="POST"
                          action="{{ route('testimonial.destroy', $testimonial) }}"
                          onsubmit="return confirm('Are you sure you want to delete this testimonial?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-full
                                 shadow-md transition duration-300 ease-in-out"
                        >
                            Delete
                        </button>
                    </form>
                    @endcan

                </div>
        </div>

    </div>


