@extends('dashboardPage.layout')
@section('content')

    <head>
        <link rel="stylesheet" type='text/css' href="{{ asset('css/cards.css') }}">
    </head>

    <body>
        @if ($article == null)
            <p>no news</p>
        @else
            <div style="display: flex; flex-direction:column; align-items:center; padding-bottom: 600px;">
                <h1 style="font-size: 60px">{{ $article->title }}</h1>
                <p class=" text-gray-900" style="align-self: end; padding-left: 90px;"> Written By : {{ $article->author_name }}</p>
                <p class=" text-gray-500" style="align-self: end; padding-left: 90px;">
                    Published @
                    <time datetime="">
                        {{ $article->created_at }}
                    </time>
                </p>
                <br/>
                @if ($article->image === 'noimage.jpg')
                    <img style="width:900px; height:500px;"
                        src='https://images.unsplash.com/photo-1585829365295-ab7cd400c167?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'>
                @else
                    <img style="width:900px; height:500px;" src='/storage/images/{{ $article->image }}' />
                @endif
                <p class="text-gray-700" style="font-size:xx-large; white-space: break-spaces; overflow: hidden;">
                    {{ $article->content }}
                </p>
            </div>
            {{-- @if ($article == null)
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
        @endif --}}

    </body>
@endsection
