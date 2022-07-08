@extends('layouts.master')
@section('title',$category->name)
@section('content')
    <div class="s-content">

        <header class="listing-header">
            <h1 class="h2">Kategori: {{ $category->name }}</h1>
        </header>

        <div class="masonry-wrap">

            <div class="masonry">

                <div class="grid-sizer"></div>
                @foreach($articles as $article)
                <article class="masonry__brick entry format-standard animate-this">

                    <div class="entry__thumb">
                        <a href="{{ route('article.show',$article->slug) }}" class="entry__thumb-link">
                            <img src="{{ asset('').$article->image_url }}" />
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <h2 class="entry__title"><a href="{{ route('article.show',$article->slug) }}">{{ $article->name }}</a></h2>
                            <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="{{ route('category.show',$article->category->slug) }}">{{ $article->category->name }}</a>
                                    </span>
                                <span class="entry__meta-date">
                                        <a href="single-standard.html">{{ $article->created_at }}</a>
                                    </span>
                            </div>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                {!! $article->description !!}
                            </p>
                        </div>
                    </div>

                </article>  <!-- end article -->
                @endforeach
            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </div>
@endsection
