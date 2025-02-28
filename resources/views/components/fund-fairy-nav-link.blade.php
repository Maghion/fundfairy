@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

<a href="{{ getenv('APP_URL') }}{{ $url }}"
   class="{{ $active ? 'text-yellow-400 font-bold' : 'text-white' }}
    @if($mobile)hover:bg-blue-700 @else hover:underline @endif
    @if($mobile) px-4 @endif py-2
    @if($mobile) block @endif ">

    @if($icon)
    <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif {{ $slot }}
</a>


