<section class="hero relative bg-cover bg-center bg-no-repeat min-h-[70vh] md:min-h-auto py-12 flex items-center
    bg-[url('/images/hero_hands.png')] md:bg-none">


<div class="absolute inset-0 bg-fuchsia-950/70 md:hidden z-0"></div>

    <div class="overlay absolute inset-0 bg-fuchsia-950 hidden md:block z-0"></div>

    <div class="container mx-auto relative z-10 flex flex-col md:flex-row w-full h-full">

        {{-- Text Column --}}
        <div class="w-full md:w-[37%] flex flex-col justify-center p-4 text-white text-center md:text-left">
            <h2 class="text-4xl sm:text-4xl md:text-5xl font-bold mb-4">
                Turn <span class="text-fuchsia-500">Dreams</span> into <br>Reality!
            </h2>
            <p class="text-base sm:text-lg font-light md:text-2xl mb-6">
                Request funding to launch your business or help others succeed by investing in their ideas
            </p>
            <form class="flex flex-col items-center md:flex-row md:space-x-2">
                <button class="mb-2 md:mb-0 bg-yellow-500 hover:bg-yellow-600 text-white font-bold
                   px-6 py-3 w-[180px] md:w-auto">
                    Donate
                </button>
                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold
                   px-6 py-3 w-[180px] md:w-auto">
                    Sign Up
                </button>
            </form>

        </div>

        <!-- Desktop Image Column -->
        <div class="hidden md:block md:w-[64%] relative">
            <img src="{{ asset('images/hero_hands.png') }}"
                 alt="People putting their hands together"
                 class="w-full h-full object-cover" />
            <div class="absolute inset-0 bg-fuchsia-300 mix-blend-soft-light pointer-events-none"></div>
        </div>

    </div>
</section>
