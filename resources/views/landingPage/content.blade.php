@extends('landingPage.landing')

@section('content')


    <section class="bg-white border-b py-12 ">
        <div class="flex flex-wrap items-center mt-32">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Hot news
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

            @if (count($articles) < 0)
                <p>no news</p>
            @else
                @foreach ($articles as $article)
                @if (($article->id) % 2 ==0)                   
                
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                            {{ $article->title }}
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                            {{ $article->content }}
                        </p>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                            class="font-bold text-gray-800 mt-8">{{ $article->created_at }}</a>
                    </div>
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img style="width:100%" src="/storage/images/{{$article->image}}" class="w-full align-middle rounded-t-lg"/>
                                
                        </div>
                    </div>
                    @else 
                    <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600">
                            <img style="width:100%" src="/storage/images/{{$article->image}}" class="w-full align-middle rounded-t-lg"/>
                        </div>
                    </div>
                    <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                        <h3 class="text-3xl mb-2 font-semibold leading-normal">
                          {{ $article->title }}
                        </h3>
                        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700">
                          {{ $article->content }}
                        </p>
                        <a href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                            class="font-bold text-gray-800 mt-8">{{ $article->created_at }}</a>
                    </div>
                    @endif
                @endforeach
            @endif
        </div>
    </section>

    {{-- <section class="bg-gray-100 border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800">
                Title
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">
                    <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                        <img alt="..." class="max-w-full rounded-lg shadow-lg"
                            src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80" />
                    </div>
                    <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <h3 class="text-3xl font-semibold">A growing company</h3>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                The extension comes with three pre-built pages to help you get
                                started faster. You can change the text and images and you're
                                good to go.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @if (count($articles) < 0)
                <p>no news</p>
            @else
                @foreach ($articles as $article)
                    <h1><a></a></h1>
                    <div></div>

                    <div class="flex flex-wrap">
                        <div class="w-5/6 sm:w-1/2 p-6">
                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                {{ $article->title }}
                            </h3>
                            <p class="text-gray-600 mb-8">
                                {{ $article->content }}
                            <p class="text-orange-500 underline">{{ $article->created_at }}</p>
                            </p>
                        </div>
                @endforeach
                {{-- {{$articles->links()}} 
            @endif
            <div class="w-full sm:w-1/2 p-6">
                <img
                    src="https://images.unsplash.com/photo-1626868449668-fb47a048d9cb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" />
            </div>
        </div>
    </section> --}}
@endsection
