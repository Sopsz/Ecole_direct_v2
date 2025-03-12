<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecole Direct v2</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body class="flex justify-center antialiased font-sans bg-gray-700 text-white">
        <div class="w-1/2  flex m-10 p-5 bg-gray-600 rounded-xl">
            {{ $slot }}
        </div>
    </body>

</html>
