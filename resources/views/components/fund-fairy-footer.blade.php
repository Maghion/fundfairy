<!-- Footer Component -->
<footer class="bg-fuchsia-950 text-white p-4">
    <div class="max-w-6xl mx-auto px-5">
        <!-- Main Content Section -->
        <div class="flex flex-col md:flex-row justify-between items-center text-center md:text-left md:items-start">
            <!-- Social Media Links (Left) -->
            <div class="flex space-x-6 mt-6 md:mt-0 order-2 md:order-1">
                <a href="https://x.com/fund_fairy" target="_blank" class="text-white hover:text-fuchsia-600 text-2xl">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61574036584417" target="_blank" class="text-white hover:text-fuchsia-600 text-2xl">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="http://www.tiktok.com/@fundfairyia" target="_blank" class="text-white hover:text-fuchsia-600 text-2xl">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>

            <!-- Center Title and Slogan -->
            <div class="order-1 md:order-2 mb-6 md:mb-0">
                <h3 class="text-3xl font-semibold mb-2">Fund Fairy</h3>
                <p class="text-white-300">We are strong together.</p>
            </div>


            <!-- Contact Information (Right) -->
            <div class="flex space-x-6 mt-6 md:mt-0 order-3">
                <a href="https://maps.app.goo.gl/khi4TaHz1jHJWsYK7?g_st=com.google.maps.preview.copy" target="_blank" class="text-white hover:text-fuchsia-600 text-xl">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a href="mailto:fundfairy.kirkwood@gmail.com" class="text-white hover:text-fuchsia-600 text-xl">
                    <i class="fa-solid fa-envelope"></i>
                </a>
                <a href="tel:+1234567890" class="text-white hover:text-fuchsia-600 text-xl">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="border-t border-white-700 mt-8 pt-6 flex flex-col md:flex-row justify-between text-sm text-gray-400">
            <p class="text-white text-center md:text-left">&copy; FundFairy, 2025. All rights reserved.</p>
            <div class="flex justify-center md:justify-end space-x-4 mt-2 md:mt-0">
                <a href="{{ url('/about') }}" class="text-white hover:text-fuchsia-600">About us</a>
                <a href="{{ url('/newsletter') }}" class="text-white hover:text-fuchsia-600 border-l pl-4">Subscribe to our Newsletter</a>
                <a href="{{ url('/privacypolicy') }}" class="text-white hover:text-fuchsia-600 border-l pl-4">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>


