@extends('dashboardPage.layout')
@section('content')
<head>
    <link rel="stylesheet" type='text/css' href="{{ asset('css/cards.css') }}">
</head>
<body>
@if ($article == null)
    <p>no news</p>
@else
    <div class="blog-card">
        <div class="meta">
            @if ($article->image === 'noimage.jpg')
                <div class="photo"
                    style="background-image: url(https://images.unsplash.com/photo-1585829365295-ab7cd400c167?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80)">
                </div>
            @else
                <div class="photo" style="background-image: url(/storage/images/{{ $article->image }})">
                </div>
            @endif
            <ul class="details">
                <li>
                    <form action="/articles/{{ $article->id }}" method="POST" class="myform">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </li>
                <li>
                    <form action="/articles/{{ $article->id }}/edit" method="GET" class="myform">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="description">
            <h1>{{ $article->title }}</h1>
            <h2>written by {{ $article->author_name }}</h2>
            <p> {!! $article->content !!}.</p>
            <p class="read-more">
                <small>{{ $article->created_at }}</small>
            </p>
        </div>
    </div>
    {{-- {{$articles->links()}} --}}
@endif

</body>
@endsection