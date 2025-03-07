<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1>{{ $title }}</h1>
    <form action="/donation" method="POST">
        @csrf

        <input type="text" name="amount" placeholder="amount" />
        <input type="text" name="message" placeholder="Message" />
        <label>
            <input type="checkbox" name="anon" value="1"/> Donate Anonymously
        </label>

        <h3>Select Donation Type:</h3>
        <label>
            <input type="radio" name="donation_type" value="Singular" checked /> One-time
        </label>
        <label>
            <input type="radio" name="donation_type" value="Weekly" /> Weekly
        </label>
        <label>
            <input type="radio" name="donation_type" value="Monthly" /> Monthly
        </label>

        <button type="submit">Submit</button>
    </form>
</x-fund-fairy-layout>


