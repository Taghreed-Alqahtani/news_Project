@extends('category')
@section('content')
    @if (count($results) < 0)
        <p>no news</p>
    @else
        @foreach ($results as $result)
            <h1><a>{{ $result->title }}</a></h1>
            <div>{{ $result->content }}</div>
        @endforeach
        {{-- {{$articles->links()}} --}}
    @endif
@endsection
