@include('landingPage.header')
@include('landingPage.nav')
<section class="content">
    <form action="/search" type="get" role="search">
        <div class="search_wrap">
            <div class="search">
                {{ csrf_field() }}
                <input type="text" class="searchTerm" placeholder="What are you looking for?" name="query">
                <button type="submit" class="searchButton">
                    Search
                </button>
            </div>
        </div>
    </form>
    @if (count($articles) < 1)
        <p>no news</p>
    @else
        @foreach ($articles as $article)
            <div class="news_div">
                <div class="grid grid-cols-12 md:items-center w-full max-w-screen-sm md:max-w-screen-md mx-auto px-4">
                    <div
                        class="col-span-12 md:col-span-auto md:col-start-1 md:col-end-9 md:row-start-1 md:row-end-1 bg-red-500">
                        <a class="" href="/article/{{ $article->id }}" title="Image Link">
                            <picture class="relative block w-full h-0 pb bg-gray-300 overflow-hidden shadow-lg"
                                style="padding-top: 75%;">
                                @if ($article->image === 'noimage.jpg')
                                    <img class="absolute inset-0 w-full h-full object-cover"
                                        src='https://images.unsplash.com/photo-1585829365295-ab7cd400c167?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'>
                                @else
                                    <img class="absolute inset-0 w-full h-full object-cover"
                                        src='/storage/images/{{ $article->image }}'>
                                @endif
                            </picture>
                        </a>
                    </div>
                    <div
                        class="col-span-12 md:col-span-auto md:col-start-7 md:col-end-13 md:row-start-1 md:row-end-1 -mt-8 md:mt-0 relative z-10 px-4 md:px-0">
                        <div class="p-4 md:p-8 bg-white shadow-lg wid-hei">
                            <p class="mb-2 text-lg leading-none font-medium">
                                <a href="/article/{{ $article->id }}" title="Heading Link" class="myTitle">
                                    {{ $article->title }}
                                </a>
                            </p>
                            <p style="white-space: break-spaces; height:70px; overflow: hidden;">
                                {{ $article->content }}</p>
                            <a href="/article/{{ $article->id }}" style="color: brown">Read more..</a>
                            <p class="text-xs text-gray-500">
                                Published @
                                <time datetime="">
                                    {{ $article->created_at }}
                                </time>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $articles->links() }}
    @endif
</section>
@include('landingPage.contact')
