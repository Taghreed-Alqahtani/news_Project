<section class="content">
    <div class="comments">
        <div class="comment-wrap">
            <div class="comment-block">
                <form action="/comment" method="POST">
                    @csrf
                    <textarea name="comment" cols="30" rows="3" placeholder="Add comment..."></textarea>
                    <input style="display: none" name="article_id" value={{ $article->id }} />
                    <button class="comment-actions" type="submit">Send</button>
                </form>
            </div>
        </div>
        @if (count($comments) > 0)
            @foreach ($comments as $Comment)
                @if ($Comment->approved)
                    <div class="comment-wrap">
                        <div class="comment-block">
                            <p class="comment-text">{{ $Comment->comment }}</p>
                            <div class="bottom-comment">
                                <div class="comment-date">{{ $Comment->created_at }}</div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @else
            <h4>no comments</h4>
        @endif
    </div>
</section>
