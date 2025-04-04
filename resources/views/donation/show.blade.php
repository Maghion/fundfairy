<x-fund-fairy-layout>
    <x-slot name="title">Viewing Donation for {{ number_format($donation->amount, 2) }}</x-slot>
        @forelse($donations as $donation)
                <strong>Amount:</strong> ${{ number_format($donation->amount, 2) }}
{{--            <li><strong>Donor:</strong>--}}
{{--                {{ $donation->anon }} ? 'Anonymous' : {{ $donation->user->first_name }} . ' ' . {{ $donation->user->last_name }}--}}
{{--            </li>--}}
{{--            <li><strong>Request Title:</strong> {{ $donation->donationRequest->title }}</li>--}}
            <li><strong>Message:</strong> {{ $donation->message }}</li>
            <li><strong>Type:</strong> {{ ($donation->type) }}</li>
        @endforelse


</x-fund-fairy-layout>
