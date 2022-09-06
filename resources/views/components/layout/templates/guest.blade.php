@props([
    'title' => 'PenTips',
])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>

        @vite(['resources/app.pcss', 'resources/js/app.js'])
    </head>
    <body>

        <div class="container mx-auto px-4">
            {{ $slot }}
        </div>

    </body>
</html>
