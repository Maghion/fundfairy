<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fund Fairy {{ isset($title) && $title ? '| ' . $title : '' }}</title>
    <link rel="stylesheet" href="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/styles/themes/default.css" />
    <link rel="stylesheet" href="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/styles/webawesome.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script type="module" src="https://early.webawesome.com/webawesome@3.0.0-alpha.10/dist/webawesome.loader.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/bf8479ea8b.js" crossorigin="anonymous"></script>
    <script src='js/scripts.js' defer></script>
</head>
<body class="bg-gray-100">
<x-fund-fairy-header />
@if(request() ->is('/'))
    <x-fund-fairy-top-banner />
    <x-fund-fairy-hero />
@endif
<main class="container mx-auto p-4 mt-4">
    {{ $slot }}
</main>
<x-fund-fairy-bottom-banner />
<x-fund-fairy-footer/>
</body>
</html>
