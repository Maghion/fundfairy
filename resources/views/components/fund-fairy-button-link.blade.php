@props([
    'url' =>  '/',
    'icon' => null,
    'btnColor' => 'bg-yellow-500',
    'hoverClass' => 'hover:bg-yellow-600',
    'textClass' => 'text-black',
    'block' => false
    ])

<a href="{{$url}}" style="text-decoration: none"
   class="{{$btnColor}} {{$hoverClass}} {{$textClass}} px-4 py-2 rounded hover:text-white shadow-md transition duration-300
   {{$block ? 'block' : ''}}">

    @if($icon)
        <i class="fa fa-{{$icon}}"></i>
    @endif
    {{$slot}}
</a>
