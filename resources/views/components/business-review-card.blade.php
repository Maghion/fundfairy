@props(['businessReview'])

<div class="rounded-lg shadow-md bg-white p-4">
    <h2 class="text-xl font-semibold mb-2 text-gray-800">
        {{ $businessReview ->title }}
    </h2>

    <div class="text-yellow-500 text-sm mb-2">
        @for ($i = 0; $i < $businessReview ->rating; $i++)
            ⭐
        @endfor
    </div>

    <p class="text-gray-700 text-sm">
        {{ $businessReview->comment }}
    </p>
    <div class="text-sm text-gray-500 mt-2">
        <strong>Reviewer:</strong>
        {{ $businessReview->user->first_name }} {{ $businessReview->user->last_name }}
    </div>

    <div class="text-sm text-gray-500">
        <strong>Business:</strong>
        {{ $businessReview->business->name }}
    </div>
</div>
