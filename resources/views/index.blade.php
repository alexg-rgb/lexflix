<x-layout>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-2xl font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
        <div class="now-playing-movies mt-10">
            <h2 class="uppercase tracking-wider text-yellow-500 text-2xl font-semibold">Now Playing Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $now_movie)
                    <x-movie-card :movie="$now_movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
