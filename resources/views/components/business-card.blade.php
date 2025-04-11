@props(['business'])

<div class="rounded-lg shadow-md bg-white p-4 @if($business->featured) order-first @endif">
    <div class="flex items-center space-between gap-4">
        <div>
            <h2 class="text-xl font-semibold">
                {{$business->name}}

                @if($business->featured)
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                    Featured
                </span>
                @endif

            </h2>
        </div>
    </div>
    <p class="text-gray-700 text-lg mt-2">
        {{Str::limit($business->business_description, 500)}}
    </p>
    <ul class="my-4 bg-gray-100 p-4 rounded">
        <li class="mb-2">
            <strong>Location:</strong> {{$business->city}}, {{$business->state}}
        </li>
    </ul>
    <a href="{{route('businesses.show', $business->id)}}"
       class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200">
        Details
    </a>
</div>


