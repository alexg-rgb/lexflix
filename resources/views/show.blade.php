<x-layout>
    <div class="container mx-auto px-4 pt-16">
        <div class="movie-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 flex">
                <img src="{{ 'https://image.tmdb.org/t/p/w342/'.$movie['poster_path']}}" alt="" >
                <div class="ml-24">
                    <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                    <div class="flex items-center text-gray-400 text-xs">
                        <span>star</span>
                        <span class="ml-1">{{ $movie['vote_average'] *10 . '%' }}</span>
                        <span class="mx-2">|</span>
                        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach($movie['genres'] as $genre)
                                {{ $genre['name'] }} @if(!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>
                    <p class="text-gray-300 mt-8">
                        {{ $movie['overview'] }}
                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Crew</h4>
                        <div class="flex mt-4">
                            @foreach($movie['credits']['crew'] as $crew)
                                @if($loop->index < 2)
                                    <div class="mr-8">
                                        <div>{{$crew['name']}}</div>
                                        <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @if(count($movie['videos']['results'])>0)
                    <div class="mt-12">
                        <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex bg-red-600 text-white rounded font-semibold px-4 py-3 hover:bg-red-400 transition ease-in-out duration 150">Trailer</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--End movie info-->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap 8">
                @foreach($movie['credits']['cast'] as $cast)
                    @if($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w185/'.$cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
