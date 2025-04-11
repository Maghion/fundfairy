<x-fund-fairy-layout>
    <div class="px-(--page-padding) py-6 [--page-padding:--spacing(4)] sm:[--page-padding:--spacing(8)]">
        <div class="mx-auto max-w-6xl">
            <x-slot name="title">Viewing all Users</x-slot>
            <div class="-mx-(--page-padding) mt-8 flex overflow-x-auto">
                <div class="grow px-(--page-padding)">
                    <table class="min-w-full text-left text-sm/6 whitespace-nowrap text-zinc-950">
                        <thead class="text-zinc-500">
                        <tr>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">First Name</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Last Name</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Email</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Biography</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 text-right font-medium first:pl-1 last:pr-1">Avatar</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$user->first_name}}</td>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$user->last_name}}</td>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 first:pl-1 last:pr-1">{{ $user->email }}</td>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$user->biography}}</td>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">
                                    <img src="{{ $user->avatar }}" alt="Avatar" class="w-10 h-10 rounded-full object-cover" />
                                </td>
                                <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{ $user->role }}</td>
                            </tr>
                        @empty
                            No users Found
                        @endforelse
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-fund-fairy-layout>

