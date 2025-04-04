<x-fund-fairy-layout>
    <x-slot name="title">{{$title}}</x-slot>
    <h1>{{$title}}</h1>

{{--    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">--}}
{{--        @forelse($jobs as $job)--}}
{{--            <x-job-card :job="$job"></x-job-card>--}}
    <ul>
        @forelse($users as $user)
            <li><a href="{{ route('users.show', $user->id) }}">{{ $user->email }}</a></li>

        @empty
            <li>No users Found</li>
        @endforelse
    </ul>
</x-fund-fairy-layout>

