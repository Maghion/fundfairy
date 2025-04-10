@props(['user'])

<div class="bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between h-full">
    <div class="flex items-center gap-4 mb-4">
{{--        replace company logo with avatar--}}
        @if($user->company_logo)
            <img src="/images/{{ $user->company_logo }}" alt="{{ $user->company_name }}"
                 class="w-16 h-16 object-cover rounded-full shadow" />
        @endif

        <div>


            <p class="text-sm text-gray-500">{{ $user->first_name }}</p>
            <p class="text-sm text-gray-500">{{ $user->last_name }}</p>
            <p class="text-sm text-gray-500">{{ $user->email }}</p>
            <p class="text-sm text-gray-500">{{ $user->biography }}</p>
            <p class="text-sm text-gray-500">{{ $user->avatar }}</p>
            <p class="text-sm text-gray-500">{{ $user->role }}</p>

        </div>
    </div>

    <a href="{{ route('users.show', $user->id) }}"
       class="mt-auto inline-block w-full text-center px-4 py-2 rounded-xl bg-indigo-100 text-indigo-700 font-medium hover:bg-indigo-200 transition">
        View User Details
    </a>
</div>