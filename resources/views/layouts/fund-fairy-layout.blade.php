<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fund Fairy {{ isset($title) && $title ? '| ' . $title : '' }}</title>
    <link rel="stylesheet" href="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/styles/themes/default.css" />
    <link rel="stylesheet" href="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/styles/webawesome.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="icon" type="iamge/x-icon" href="{{ asset('/images/logo.ico') }}" />
    <script type="module" src="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/webawesome.loader.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/bf8479ea8b.js" crossorigin="anonymous"></script>
    <script src='js/scripts.js' defer></script>
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
</head>
<body class="bg-gray-100">
<x-fund-fairy-header />
@if(request() ->is('/'))
    <x-fund-fairy-top-banner />
    <x-fund-fairy-hero />
@endif
<main class="container mx-auto p-4 mt-4">
    @if (session('success'))
        <x-alert type="success" message="{{ session('success') }}" />
    @elseif (session('warning'))
        <x-alert type="warning" message="{{ session('warning') }}" />
    @elseif (session('error'))
        <x-alert type="error" message="{{ session('error') }}" />
    @endif
    {{ $slot }}
</main>
<x-fund-fairy-bottom-banner />
<x-fund-fairy-footer/>
</body>
</html>
