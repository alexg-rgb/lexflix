<x-layoutBack>
<form action="create" method="post" enctype="multipart/form-data" class="text-black">
    @csrf
    <table>
    <tr>
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
    </tr>
        <tr>
        <td>
            <input name="genres" type="text"
                   value="
                    @foreach($movie['genres'] as $genre)
                   {{ $genre['name'] }} @if(!$loop->last), @endif
                   @endforeach
                       ">
            <span style="color:red">@error('genres'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="poster_path" type="text" value="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}">
            <span style="color:red">@error('poster_path'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="overview" type="text" value="{{ $movie['overview'] }}">
            <span style="color:red">@error('overview'){{ $message }} @enderror</span>
        </td>
        </tr>
        <tr>
        <td>
            <input name="crewName" type="text" value="
                @foreach($movie['credits']['crew'] as $crew)
                @if($loop->index < 2)
                    {{$crew['name']}}
                @endif
                @endforeach
            ">
            <span style="color:red">@error('crewName'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="jobName" type="text" value="
                @foreach($movie['credits']['crew'] as $crew)
                @if($loop->index < 2)
                    {{$crew['job']}}
                @endif
                @endforeach
                ">
            <span style="color:red">@error('jobName'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="trailer" type="text" value="
                @if(count($movie['videos']['results'])>0)
                https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}
                @endif
            ">
            <span style="color:red">@error('trailer'){{ $message }} @enderror</span>
        </td>
        </tr>
        <td>
            <input name="actorOneName" type="text" value="
                @foreach($movie['credits']['cast'] as $cast)
                @if($loop->index < 1)
                {{ 'https://image.tmdb.org/t/p/w185/'.$cast['profile_path'] }}"
                {{ $cast['name'] }}
                @endif
                @endforeach
            ">
            <span style="color:red">@error('actorOne'){{ $message }} @enderror</span>
        </td>
        <td>
            <input name="actorOnePicture" type="text" value="
                @foreach($movie['credits']['cast'] as $cast)
            @if($loop->index < 1)
            {{ $cast['name'] }}
            @endif
            @endforeach
            ">
            <span style="color:red">@error('actorOnePicture'){{ $message }} @enderror</span>
        </td>

        <td>
            <input name="actorTwoName" type="text" value="
                @foreach($movie['credits']['cast'] as $cast)
            @if($loop->index < 2)
            {{ 'https://image.tmdb.org/t/p/w185/'.$cast['profile_path'] }}"
            {{ $cast['name'] }}
            @endif
            @endforeach
            ">
            <span style="color:red">@error('actorTwo'){{ $message }} @enderror</span>
        </td>
    </tr>
    <td><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button></td>
    </table>
</form>
</x-layoutBack>
