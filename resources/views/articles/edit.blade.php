<h1>edit article</h1>

<form action="/articles/{{ $article->id }}" method="POST">
    @csrf
    @method('PUT')
    <label>title</label>
    <input type="text" name="title" value="{{ $article->title }}" />
    <label>category</label>
    <input type="text" name="category" value="{{ $article->category }}" />
    <label>content</label>
    <input type="text" name="content" value="{{ $article->content }}" />
    <label>author name</label>
    <input type="text" name="author_name" value="{{ $article->author_name }}" />
    <button type="submit">update</button>
</form>
