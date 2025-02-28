<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Fund Fairy</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-fund-fairy-nav-link :active="request()->is('/')" url="/">Home</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('about')" url="/about">About</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('businesses')" url="/businesses">Businesses</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved">Bookmarks</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('register')" url="/register">Register</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('login')" url="/login">User Login</x-fund-fairy-nav-link>
            <x-fund-fairy-button-link btnColor="bg-blue-500" textClass="text-white" url="/donation/create" icon="edit" :block="true">Donation Request</x-fund-fairy-button-link>
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
{{--    <!-- Mobile Menu -->--}}
    <div
        id="mobile-menu"
        class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
    >
        <x-fund-fairy-nav-link :active="request()->is('/')" :mobile="true">Home</x-fund-fairy-nav-link>
        <x-fund-fairy-nav-link :active="request()->is('/about')" :mobile="true">About</x-fund-fairy-nav-link>
        <x-fund-fairy-nav-link :active="request()->is('/businesses')" :mobile="true">Businesses</x-fund-fairy-nav-link>
        <x-fund-fairy-nav-link :active="request()->is('/businesses/saved')" :mobile="true">Bookmarks</x-fund-fairy-nav-link>
        <x-fund-fairy-nav-link :active="request()->is('/register')" :mobile="true">Register</x-fund-fairy-nav-link>
        <x-fund-fairy-nav-link :active="request()->is('/login')" :mobile="true">User Login</x-fund-fairy-nav-link>
        <a
            href="{{ url('/donation/create') }}"
            class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
        >
            <i class="fa fa-edit"></i> Donation Request
        </a>
    </div>
</header>
