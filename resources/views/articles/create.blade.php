@extends('dashboardPage.layout')
@section('content')

<body>
    <div class="container">
        <div class="frame">
            <div class="nav">
                <h1 class="signin-active btn">Add Article</h1>
            </div>
            <div>
                <form class="form-signin" action="/articles" method="POST" enctype='multipart/form-data' name="form">
                    @csrf
                    <label for="title">title</label>
                    <input class="form-styling" type="text" name="title" placeholder="" />

                    <label for="content">content</label>
                    <textarea class="form-styling" type="text" name="content" placeholder=""></textarea>

                    <label for="author_name">author name</label>
                    <input class="form-styling" type="text" name="author_name" placeholder="" />

                    <label for="category">category</label>
                    <input list="categries" id="mycategory" name="category" class="form-styling" placeholder="type or choose .."/>
                    <datalist id="categries">
                        <option value="Economy">Economy</option>
                        <option value="Business">Business</option>
                        <option value="Sport">Sport</option>
                        <option value="Digital & technology">Digital & technology</option>
                        <option value="Entertainment">Entertainment</option>
                    </datalist>

                    <input type="file" name="file">

                    <div class="btn-animate">
                        <button class="btn-signin" type="submit">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        // <textarea type="text" name="content" id="editor"></textarea>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

@endsection
