<x-fund-fairy-layout>
{{--    <x-slot name="title">{{ $title }}</x-slot>--}}
    <div class="aboutPage">
{{--
        figured out how to render html from controller
        thanks to https://laravel.com/docs/5.7/blade#displaying-data
--}}
       {!! $about !!}
    </div>
</x-fund-fairy-layout>
