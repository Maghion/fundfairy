<header class="bg-fuchsia-950 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-bold">
            <a href="{{url('/')}}" class="flex items-center space-x-2 hover:text-white no-underline hover:no-underline">
                <img src="{{ asset('images/logo.png') }}" alt="Fund Fairy Logo" class="h-16 w-16">
                <span>FundFairy</span>
            </a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-fund-fairy-nav-link :active="request()->is('/')" url="/">Home</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('about')" url="/about">About</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('blog-posts')" url="/blog-posts">Blog Post</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('testimonial')" url="/testimonial">Testimonials</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('businesses')" url="/businesses">Businesses</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('donation-request')" url="/donation-request">Donation Requests</x-fund-fairy-nav-link>
            @auth
            <x-fund-fairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved">Bookmarks</x-fund-fairy-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:underline" style="background-color: transparent; ">
                        Logout
                    </button>
                </form>
            @else
                <x-fund-fairy-nav-link :active="request()->is('register')" url="/register">Register</x-fund-fairy-nav-link>
                <x-fund-fairy-nav-link :active="request()->is('login')" url="/login">Login</x-fund-fairy-nav-link>
            @endauth

            @auth
                <x-fund-fairy-button-link btnColor="bg-yellow-500" textClass="text-white" url="/donation-request/create" icon="edit" :block="true">Donation Request</x-fund-fairy-button-link>
            @endauth


        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl p-2"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
   <nav id="mobile-menu"
        class="hidden md:hidden bg-fushia-950 text-white mt-5 pb-4 space-y-2">
       <x-fund-fairy-nav-link :active="request()->is('/')" url="/" :mobile="true">Home</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('about')" url="/about"  :mobile="true">About</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('blog-posts')" url="/blog-posts"  :mobile="true">Blog Posts</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('testimonial')" url="/testimonial"  :mobile="true">Testimonials</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('businesses')" url="/businesses"  :mobile="true">Businesses</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('donation-request')" url="/donation-request"  :mobile="true">Donation Requests</x-fund-fairy-nav-link>
       @auth
           <x-fund-fairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved"  :mobile="true">Bookmarks</x-fund-fairy-nav-link>
           <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button type="submit" class="hover:underline" style="background-color: transparent; ">
                   Logout
               </button>
           </form>
       @else
           <x-fund-fairy-nav-link :active="request()->is('register')" url="/register"  :mobile="true">Register</x-fund-fairy-nav-link>
           <x-fund-fairy-nav-link :active="request()->is('login')" url="/login"  :mobile="true">Login</x-fund-fairy-nav-link>
       @endauth

        @auth
           <x-fund-fairy-button-link btnColor="bg-blue-500" textClass="text-white" url="/donation-request/create"  :mobile="true" icon="edit" :block="true">Donation Request</x-fund-fairy-button-link>
        @endauth
    </nav>
</header>
