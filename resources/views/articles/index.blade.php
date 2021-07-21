@if (count($articles) < 0)
    <p>no news</p>
@else
    @foreach ($articles as $article)
        <h1><a>{{ $article->title }}</a></h1>
        <div>{{ $article->content }}</div>
        <form action="/articles/{{$article->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    @endforeach
    {{-- {{$articles->links()}} --}}
@endif
