<x-layoutBack>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-white text-2xl font-semibold ">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <table border="2">
                    <tr>
                        <td>Title</td>
                        <td>Overview</td>
                        <td>Genres</td>
                        <td>Vote Average</td>
                        <td>Image</td>
                        <td>Submit</td>
                    </tr>
                @foreach($popularMovies as $movie)
                    <x-movieBack-card :movie="$movie" :genres="$genres"/>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</x-layoutBack>
