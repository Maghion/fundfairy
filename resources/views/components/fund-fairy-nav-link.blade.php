@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

<a href="{{ $url }}"
    class="no-underline hover:no-underline py-2 {{ $active ? 'text-yellow-400 hover:text-yellow-500 font-bold' : 'text-white hover:text-white' }}
    @if($mobile) px-4 @endif py-2
    @if($mobile) block @endif">
    @if($icon)
    <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif {{ $slot }}
</a>
