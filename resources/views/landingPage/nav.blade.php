<div class="nav-fixed nav-container teal borderYtoX" style="position: fixed; z-index: 15;">
    <a href="/landing">HOME</a>
    <a href="/allnews">ALL NEWS</a>
    <li class="dropdown">
        <a class="dropbtn">CATEGORY</a>
        <div class="dropdown-content">
            @if (count($categorys) > 0)
                @foreach ($categorys as $category)
                    <a href="/category/{{ $category->category }}">{{ $category->category }}</a>
                @endforeach
            @endif
        </div>
    </li>
    <a href="#contact">CONTACT</a>
</div>