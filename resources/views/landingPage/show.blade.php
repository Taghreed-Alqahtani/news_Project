@include('landingPage.header')
@include('landingPage.nav')

<section class="content">
    @if ($article == null)
        <p>no news</p>
    @else
        <div style="display: flex; flex-direction:column; align-items:center;  padding-top: 100px;">
            <h1 style="font-size: 60px">{{ $article->title }}</h1>
            <p class=" text-gray-900" style="align-self: end; padding-left: 90px;">Written By : {{ $article->author_name }}</p>
                <p class=" text-gray-500" style="align-self: end; padding-left: 90px;">
                    Published @
                    <time datetime="">
                        {{ $article->created_at }}
                    </time>
                </p>
                <br/>
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
</section>
@include('landingPage.comments')
@include('landingPage.contact')
