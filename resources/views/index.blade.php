@extends('layouts.master')
@section('title','Ana sayfa')
@section('content')
    <div class="s-content">

        <div class="masonry-wrap">

            <div class="masonry">

                <div class="grid-sizer"></div>
                @foreach($articles as $article)
                <article class="masonry__brick entry format-standard animate-this">

                    <div class="entry__thumb">
                        <a href="{{ route('article.show',$article->slug) }}" class="entry__thumb-link">
                            <img src="{{ asset('').$article->image_url }}">
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <h2 class="entry__title"><a href="#">{{ $article->name }}</a></h2>
                            </h2>
                            <div class="entry__meta">
                                    <span class="entry__meta-cat">
                                        <a href="#">{{ $article->category->name }}</a>
                                    </span>
                                <span class="entry__meta-date">
                                        <a href="#">{{ $article->created_date }}</a>
                                    </span>
                            </div>

                        </div>
                        <div class="entry__excerpt">
                            <p>
                                {!! $article->description !!}
                            </p>
                        </div>
                    </div>

                </article>
                @endforeach
            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </div>
@endsection
