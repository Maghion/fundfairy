@props(['url' => '/', 'active' => false, 'icon' => null])

<a href="{{ $url }}" class="hover:underline py-2 {{ $active ? 'text-yellow-400 font-bold' : 'text-white' }}">
    @if($icon)
    <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif {{ $slot }}
</a>


