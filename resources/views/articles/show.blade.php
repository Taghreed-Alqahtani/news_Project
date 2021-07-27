@extends('dashboardPage.layout')
@section('content')

    <head>
        <link rel="stylesheet" type='text/css' href="{{ asset('css/cards.css') }}">
    </head>

    <body>
        @if ($article == null)
            <p>no news</p>
        @else
            <div style="display: flex; flex-direction:column; align-items:center; padding-bottom: 100px;">
                <h1 style="font-size: 60px">{{ $article->title }}</h1>
                <p class=" text-gray-900" style="align-self: end; padding-left: 90px;"> Written By :
                    {{ $article->author_name }}</p>
                <p class=" text-gray-500" style="align-self: end; padding-left: 90px;">
                    Published @
                    <time datetime="">
                        {{ $article->created_at }}
                    </time>
                </p>
                <br />
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
        @endif
        <div class="comments">
            @if (count($comments) > 0)
                @foreach ($comments as $Comment)
                    <div class="comment-wrap">
                        <div class="comment-block">
                            <p class="comment-text">{{ $Comment->comment }}</p>
                            <div class="bottom-comment">
                                <div class="comment-date">{{ $Comment->created_at }}</div>
                                <ul class="comment-actionss">
                                    <form action="/comment/{{ $Comment->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        @if ($Comment->approved)
                                            <button type="submit" class="disable">APPROVED</button>
                                        @else
                                            <button type="submit">
                                                APPROVE
                                            </button>
                                        @endif

                                    </form>
                                    <form action="/comment/{{ $Comment->id }}/edit" method="GET">
                                        @csrf
                                        <button type="submit">EDIT</button>
                                    </form>
                                    <form action="/comment/{{ $Comment->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">DELETE</button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>no comments</h4>
            @endif
        </div>
    </body>
@endsection
