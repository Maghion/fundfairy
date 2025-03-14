@props([
    'heading' => 'Turn Dreams into Reality!',
    'subheading' => 'Request funding to launch your business or help others succeed by investing in their ideas',
    'btnText' => 'Donate Now!',
    'btnLink' => '/donation-request/create',
    'btnIcon' => 'magic',
    'btnColor' => 'bg-violet-900',
    'imageSrc' => 'images/donations.jpg'
 ])
<section class="container mx-auto my-6">
    <div
        class="bg-purple-700 text-white py-6 text-center">
        <div class="flex items-center justify-center space-x-4">
            <!-- Image with rounded shape at the top -->
            <img src="{{ $imageSrc }}" alt="Banner Image" class="w-32 h-32 rounded-full mr-4">
        </div>
        <div>
            <h2 class="text-xl font-semibold">{{ $heading }}</h2>
            <p class="text-gray-200 text-lg mt-2">
                {{ $subheading }}
            </p>
        </div>
        <div class="mt-6">
            <x-fund-fairy-button-link url="{{ $btnLink }}" icon="{{ $btnIcon }}" btnColor="{{ $btnColor }}"> {{ $btnText }}</x-fund-fairy-button-link>
        </div>
    </div>
</section>
