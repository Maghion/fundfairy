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
    </div>
    <!-- Mobile Menu -->
{{--    <nav--}}
{{--        id="mobile-menu"--}}
{{--        class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">--}}
{{--        <a href="{{url('/about')}}" class="block px-4 py-2 hover:bg-blue-700">About</a>--}}
{{--        <a href="{{url('/businesses')}}" class="block px-4 py-2 hover:bg-blue-700">Businesses</a>--}}
{{--        <a href="{{url('/testamonials')}}" class="block px-4 py-2 hover:bg-blue-700">Testamonials</a>--}}
{{--        <a href="{{url('/login')}}" class="block px-4 py-2 hover:bg-blue-700">Login</a>--}}
{{--        <a href="{{url('/donation/create')}}" class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black">--}}
{{--            <i class="fa fa-edit"></i> Donation Request</a>--}}
{{--    </nav>--}}
</header>
