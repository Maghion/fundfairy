<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{url('/')}}">Fund Fairy</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-fundfairy-nav-link :active="request()->is('/')" url="/">Home</x-fundfairy-nav-link>
            <x-fundfairy-nav-link :active="request()->is('about')" url="/about">About</x-fundfairy-nav-link>
            <x-fundfairy-nav-link :active="request()->is('businesses')" url="/businesses">Businesses</x-fundfairy-nav-link>
            <x-fundfairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved">Bookmarks</x-fundfairy-nav-link>
            <x-fundfairy-nav-link :active="request()->is('register')" url="/register">Register</x-fundfairy-nav-link>
            <x-fundfairy-nav-link :active="request()->is('login')" url="/login">User Login</x-fundfairy-nav-link>
            <a class="bg-red-500 bgtext-white" href="/donation/create">Donation Request</a>
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




{{--<header class="bg-blue-900 text-white p-4">--}}
{{--    <div class="container mx-auto flex justify-between items-center">--}}
{{--        <h1 class="text-3xl font-semibold">--}}
{{--            <a href="index.html">Fund Fairy</a>--}}
{{--        </h1>--}}
{{--        <nav class="hidden md:flex items-center space-x-4">--}}
{{--            <a href="about.html" class="text-white hover:underline py-2">About</a>--}}
{{--            <a href="saved-jobs.html" class="text-white hover:underline py-2"--}}
{{--            >Saved Jobs</a--}}
{{--            >--}}
{{--            <a href="login.html" class="text-white hover:underline py-2">Login</a>--}}
{{--            <a href="register.html" class="text-white hover:underline py-2"--}}
{{--            >Register</a--}}
{{--            >--}}
{{--            <a href="dashboard.html" class="text-white hover:underline py-2">--}}
{{--                <i class="fa fa-gauge mr-1"></i> Dashboard--}}
{{--            </a>--}}
{{--            <a--}}
{{--                href="create-job.html"--}}
{{--                class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"--}}
{{--            >--}}
{{--                <i class="fa fa-edit"></i> Create Job--}}
{{--            </a>--}}
{{--        </nav>--}}
{{--        <button id="hamburger" class="text-white md:hidden flex items-center">--}}
{{--            <i class="fa fa-bars text-2xl"></i>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    <!-- Mobile Menu -->--}}
{{--    <div--}}
{{--        id="mobile-menu"--}}
{{--        class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"--}}
{{--    >--}}
{{--        <a href="jobs.html" class="block px-4 py-2 hover:bg-blue-700">All Jobs</a>--}}
{{--        <a href="saved-jobs.html" class="block px-4 py-2 hover:bg-blue-700"--}}
{{--        >Saved Jobs</a--}}
{{--        >--}}
{{--        <a href="dashboard.html" class="block px-4 py-2 hover:bg-blue-700"--}}
{{--        >Dashboard</a--}}
{{--        >--}}
{{--        <a href="login.html" class="block px-4 py-2 hover:bg-blue-700">Login</a>--}}
{{--        <a href="register.html" class="block px-4 py-2 hover:bg-blue-700"--}}
{{--        >Register</a--}}
{{--        >--}}
{{--        <a--}}
{{--            href="create-job.html"--}}
{{--            class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"--}}
{{--        >--}}
{{--            <i class="fa fa-edit"></i> Create Job--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</header>--}}



