@props([
    'icon' => null,
    'btnColor' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-pink-500',
    'textClass' => 'text-black',
    'block' => false,
    'type' => 'submit'
])

<button
    type="{{ $type }}"
    class="{{ $btnColor }} {{ $hoverClass }} {{ $textClass }} px-4 rounded hover:text-white shadow-md transition duration-300
    {{ $block ? 'block' : '' }}
    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
    style="height: auto; padding: 0.3rem 1rem;">

    @if($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</button>
