@extends('layouts.master')
@section('title',$article->name)
@section('content')
    <div class="s-content content">
        <main class="row content__page">

            <article class="column large-full entry format-standard">

                <div class="media-wrap entry__media">
                    <div class="entry__post-thumb">
                        <img src="{{ asset('').$article->image_url }}" weight="200px"/>
                    </div>
                </div>

                <div class="content__page-header entry__header">
                    <h1 class="display-1 entry__title">
                        {{ $article->name }}
                    </h1>
                    <ul class="entry__header-meta">
                        <li class="date">{{ $article->created_at }}</li>
                        <li class="cat-links">
                            <a href="{{ route('category.show',$article->category->slug) }}">{{ $article->category->name }}</a>
                        </li>
                    </ul>
                </div> <!-- end entry__header -->

                <div class="entry__content">

                    {!! $article->description !!}


                    <p class="entry__tags">
                        <span>Post Tags</span>

                        <span class="entry__tag-list">
                        @foreach ($tags as $tag)
                                <a href="#0">{{ $tag }}</a>
                        @endforeach
                        </span>

                    </p>
                </div>

                <div class="entry__related">
                    <h3 class="h2">Related Articles</h3>

                    <ul class="related">
                        @foreach ($related as $item)
                            <li class="related__item">
                                <a href="{{ route('article.show',$item->slug) }}" class="related__link">
                                    <img src="{{ asset('').$item->image_url }}" alt="">
                                </a>
                                <h5 class="related__post-title">{{ $item->name }}</h5>
                            </li>
                        @endforeach
                    </ul>
                </div> <!-- end entry related -->

            </article> <!-- end column large-full entry-->

        </main>

    </div>
@endsection
