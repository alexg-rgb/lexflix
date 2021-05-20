<tr class="text-black">
    <form action="create" method="post" enctype="multipart/form-data">
        @csrf
        <td>
            <input name="title" type="text" value="{{ $movie['title'] }}">
            <span style="color:red">@error('name'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="vote_average" type="text" value="{{ $movie['vote_average'] * 10 . '%' }}">
            <span style="color:red">@error('vote_average'){{ $message }} @enderror</span>

        </td>
        <td>
            <input name="release_date" type="text" value="{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}">
            <span style="color:red">@error('release_date'){{ $message }} @enderror</span>

        </td>
        <td>
            <input name="genres" type="text" value="
                @foreach($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if(!$loop->last), @endif
                @endforeach
                ">
            <span style="color:red">@error('genres'){{ $message }} @enderror</span>

        </td>
        <td>
            <input name="poster_path" type="text" value="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}">
            <span style="color:red">@error('poster_path'){{ $message }} @enderror</span>
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="">
        </td>
        <td>
        <td><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button></td>
    </form>
</tr>
