<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Lexflix</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex item-center">
                <li>
                    <a href="#" class="hover:text-gray-300">Home</a>
                </li>
                <li class="ml-5">
                    <a href="#" class="hover:text-gray-300">Movie</a>
                </li>
                <li class="ml-5">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-5">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="relative">
                <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1" placeholder="Search">
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
