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
            <x-fund-fairy-nav-link :active="request()->is('businesses')" url="/businesses">Businesses</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('donation-request')" url="/donation-request" icon="donate">Donate</x-fund-fairy-nav-link>
            <x-fund-fairy-nav-link :active="request()->is('about')" url="/about">About</x-fund-fairy-nav-link>
        @auth
            <x-fund-fairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved">Bookmarks</x-fund-fairy-nav-link>
                <x-fund-fairy-nav-link :active="request()->is('dashboard')" url="/dashboard">Dashboard</x-fund-fairy-nav-link>

            @else
                <x-fund-fairy-nav-link :active="request()->is('register')" url="/register" icon="user">Sign Up</x-fund-fairy-nav-link>
                <x-fund-fairy-nav-link :active="request()->is('login')" url="/login">Login</x-fund-fairy-nav-link>
            @endauth

            @auth
                <x-fund-fairy-button-link btnColor="bg-yellow-500" textClass="text-white" url="/donation-request/create" icon="edit" :block="true">Donation Request</x-fund-fairy-button-link>
                <!-- User Avatar -->
                <div class="flex items-center space-x-3">
                    @if(Auth::user()->avatar)
                        <img
                            src="{{ asset('storage/' . Auth::user()->avatar) }}"
                            alt="{{ Auth::user()->name }}"
                            class="w-10 h-10 rounded-full"
                        />
                    @else
                        <img
                            src="{{ asset('storage/avatars/default-avatar.png') }}"
                            alt="{{ Auth::user()->name }}"
                            class="w-10 h-10 rounded-full"
                        />
                    @endif
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="hover:underline" style="background-color: transparent; ">
                        Logout
                    </button>
                </form>
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
       <x-fund-fairy-nav-link :active="request()->is('businesses')" url="/businesses"  :mobile="true">Businesses</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('donation-request')" url="/donation-request"  :mobile="true">Donate</x-fund-fairy-nav-link>
       <x-fund-fairy-nav-link :active="request()->is('about')" url="/about"  :mobile="true">About</x-fund-fairy-nav-link>

   @auth
           <x-fund-fairy-nav-link :active="request()->is('businesses/saved')" url="/businesses/saved"  :mobile="true">Bookmarks</x-fund-fairy-nav-link>
           <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button type="submit" class="hover:underline" style="background-color: transparent; ">
                   Logout
               </button>
           </form>
       @else
           <x-fund-fairy-nav-link :active="request()->is('register')" url="/register"  :mobile="true">Sign Up</x-fund-fairy-nav-link>
           <x-fund-fairy-nav-link :active="request()->is('login')" url="/login"  :mobile="true">Login</x-fund-fairy-nav-link>
       @endauth

    </nav>
</header>
