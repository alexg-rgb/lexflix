<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Lexflix</title>
</head>
<body class="font-sans bg-black text-white">

<nav class="border-b border-gray-800">
    <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="#">
                    <img class="w-32 mr-5" src="{{url('/images/lexflix_logo.png')}}" alt="lexflix_logo"/>
                </a>
            </li>
            <li>
                <a href="#" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="ml-5">
                <a href="#" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="ml-5">
                <a href="#" class="hover:text-gray-300">Actors and crew</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-dropdown-link>
            </form>
        </div>
    </div>
</nav>
{{ $slot }}
</body>
</html>
