@props(['business'])

<div class="rounded-lg shadow-md bg-white p-4 min-h-[20rem] flex flex-col justify-between @if($business->featured) order-first @endif">
    <div>
        <div class="flex items-center justify-between gap-4">
            <h2 class="text-xl font-semibold">
                {{ $business->name }}

                @if($business->featured)
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                        Featured
                    </span>
                @endif
            </h2>
        </div>

        <p class="text-gray-700 text-lg mt-2">
            {{ Str::limit($business->business_description, 200, '...') }}
        </p>
    </div>

    <div>
        <ul class="bg-green-100 p-4 rounded mb-4">
            <li>
                <strong>Location:</strong> {{ $business->city }}, {{ $business->state }}
            </li>
        </ul>

        <a href="{{ route('businesses.show', $business->id) }}"
           class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-fuchsia-900 bg-fuchsia-100 hover:bg-fuchsia-200 hover:text-fuchsia-950 hover:no-underline">
            Details
        </a>
    </div>
</div>
