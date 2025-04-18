@props(['user'])

<div class="bg-white rounded-2xl shadow-md p-6 flex flex-col justify-between h-full">
    <div class="flex items-center gap-4 mb-4">
{{--        replace company logo with avatar--}}
        @if($user->avatar)
            <img src="/images/{{ $user->avatar}}" alt="{{ $user->avatar }}"
                 class="w-16 h-16 object-cover rounded-full shadow" />
        @endif

        <div>

            <p class="text-sm text-gray-500">{{ $user->first_name }}</p>
            <p class="text-sm text-gray-500">{{ $user->last_name }}</p>
            <p class="text-sm text-gray-500">{{ $user->email }}</p>
            <p class="text-sm text-gray-500">{{ $user->biography }}</p>
            <img src="{{ $user->avatar }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover" />
            <p class="text-sm text-gray-500">{{ $user->role }}</p>

        </div>
    </div>



    <a href="{{ route('users.show', $user->id) }}"
       class="mt-auto inline-block w-full text-center px-4 py-2 rounded-xl bg-indigo-100 text-indigo-700 font-medium hover:bg-indigo-200 transition">
        View User Details
    </a>
</div>
