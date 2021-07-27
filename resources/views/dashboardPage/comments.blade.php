@extends('dashboardPage.layout')
@section('content')

    <div class="comments">
        <div class="comment-wrap">
            <div class="comment-block">
                <form action="/editcomment/{{ $comment->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea class="comment-text" name="comment">{{ $comment->comment }}</textarea>
                    <div class="bottom-comment">
                        <div class="comment-date">{{ $comment->created_at }}</div>
                        <ul class="comment-actionss">
                            <button class="comment-approve" type="submit">UPDATE</button>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
