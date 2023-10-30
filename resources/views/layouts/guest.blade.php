<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dracula">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased">
    <div class="flex flex-col items-center min-h-screen sm:justify-center bg-neutral">
        <a href="https://www.freepik.com/free-vector/clip-board-paper-pencil-cartoon-icon-illustration-education-object-icon-concept-isolated-flat-cartoon-style_10848390.htm#query=todo%20logo&position=7&from_view=search&track=ais"
            wire:navigate>
            <img src="{{asset('images/logo-todo.png')}}" class="w-52">
        </a>
        {{-- <div class="text-3xl font-extrabold mx-auto mb-6 ">
            My Todo
        </div> --}}
        <div
            class="space-y-10 w-full px-6 py-4 overflow-hidden shadow-md sm:max-w-md sm:rounded-lg bg-neutral-focus">
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
