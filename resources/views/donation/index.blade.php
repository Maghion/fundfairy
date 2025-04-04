{{--<x-fund-fairy-layout>--}}
{{--    <x-slot name="title">Viewing all Donations</x-slot>--}}
{{--    <ul>--}}
{{--        @forelse($donations as $donation)--}}
{{--            <a href="{{ route('donation.show', $donation->id) }}">--}}
{{--                <strong>Amount:</strong> ${{ number_format($donation->amount, 2) }}--}}
{{--            </a>--}}
{{--        @empty--}}
{{--            <li>No Donations Found</li>--}}
{{--        @endforelse--}}
{{--    </ul>--}}
{{--</x-fund-fairy-layout>--}}


<x-fund-fairy-layout>
    <div class="px-(--page-padding) py-6 [--page-padding:--spacing(4)] sm:[--page-padding:--spacing(8)]">
        <div class="mx-auto max-w-6xl">
            <x-slot name="title">Viewing all Donations</x-slot>
            <div class="-mx-(--page-padding) mt-8 flex overflow-x-auto">
                <div class="grow px-(--page-padding)">
                    <table class="min-w-full text-left text-sm/6 whitespace-nowrap text-zinc-950">
                        <thead class="text-zinc-500">
                        <tr>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Donor</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Request</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Amount</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Type</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 text-right font-medium first:pl-1 last:pr-1">Message</th>
                            <th class="border-b border-b-zinc-950/10 px-4 py-2 font-medium first:pl-1 last:pr-1">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($donations as $donation)
                        <tr>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$donation->user_id}}</td>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$donation->id}}</td>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 first:pl-1 last:pr-1">${{ number_format($donation->amount, 2) }}</td>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$donation->type}}</td>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{$donation->message}}</td>
                            <td class="relative border-b border-zinc-950/5 px-4 py-4 text-zinc-500 first:pl-1 last:pr-1">{{ $donation->created_at->format('M d, Y h:i A') }}</td>
                        </tr>
                        @empty
                            No Donations Found
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-fund-fairy-layout>
