<h1>create article</h1>

<form action="/articles" method="POST">
     @csrf
    <label>title</label>
    <input type="text" name="title" />
    <label>category</label>
    <input type="text" name="category" />
    <label>content</label>
    <input type="text" name="content" />
    <label>author name</label>
    <input type="text" name="author_name" />
    <button type="submit">post</button>
</form>

