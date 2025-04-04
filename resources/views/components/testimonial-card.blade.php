@props(['testimonial'])

<div class="bg-gray-950 px-8 py-16">
    <div class="mx-auto flex flex-col gap-y-10">
        <div class="rounded-lg bg-gray-200 p-8 outline -outline-offset-1 outline-white/25 max-w-full">
            @if($testimonial->testimonial_image)
                <img class="w-32 h-32 rounded-lg bg-gray-800 object-cover shadow-2xl outline -outline-offset-1 outline-white/10 mx-auto"
                     src="{{ url('/images') }}/{{ $testimonial->testimonial_image }}"
                     alt="{{ $testimonial->user->first_name }} {{ $testimonial->user->last_name }}" />
            @endif
            <figure class="relative isolate pt-6">
                <blockquote class="text-xl font-semibold text-white bg-violet-900 p-4 rounded">
                    <span class="absolute text-6xl top-0 left-0 -translate-x-1/2 -translate-y-1/2 text-white">“</span>
                    <p>{{ $testimonial->description }}</p>
                </blockquote>
                <figcaption class="mt-8 text-base">
                    <div class="font-semibold text-white">{{ $testimonial->user_name }}</div>
                </figcaption>
            </figure>
        </div>
    </div>
</div>


