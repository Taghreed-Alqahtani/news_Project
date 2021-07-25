@extends('landingPage.layout')

@section('content')
<section class="news-section">
    <div>
        @if (count($articles) < 1)
            <p>no news</p>
        @else
            @foreach ($articles as $article)
                <div>
                    <h3>
                        {{ $article->title }}
                    </h3>
                    <p >
                        {{ $article->content }}
                    </p>
                    <p >
                        {{ $article->category }}
                    </p>
                    <p>{{ $article->created_at }}</p>
                </div>
                <div>
                    <img style="width:100%" src='/storage/images/{{ $article->image }}' />
                </div>
            @endforeach
        @endif
    </div>
</section>

@endsection