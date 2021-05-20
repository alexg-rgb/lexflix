<div class="mt-8">
    <a href="{{ route('movies.showBack', $movie['id']) }}">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="{{ $movie['title'] }}" class="hover:opacity-75 transition ease-in-out duration-150 w-52 sm:w-64 md:w-52 lg:w-64">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-xs">
            <span><i class="fas fa-star fill-current text-yellow-300"></i></span>
            <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-xs">
            @foreach($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if(!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div>
