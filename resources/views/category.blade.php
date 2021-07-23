<form action="/search" type="get" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="search" class="form-control" name="query"
            placeholder="Search here.."> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                search</span>
            </button>
        </span>
    </div>
</form>

@yield('content')