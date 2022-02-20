@extends('layouts.app')
@section('logout')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.logout')}}">Logout</a>
@endsection
@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        My articles
    </h3>
    @foreach($articles as $article)
        <div class="post-preview">
            <a href="{{ route('user.get_article', ['id' => $article->id]) }}">
                <h4 class="blog-post-title">{{ $article -> title }}</h4>
            </a>
                <p class="blog-post-meta">{{ $article -> created_at ->format('d-m-y H:i') }} by <a href="#">{{ $article -> author }}</a></p>
                <p class="post-subtitle" style="font-style: italic; font-size: 1.2rem;">{!! $article -> short_text !!}</p>
                <hr>
                <br>


        </div>
    @endforeach
    <br>
    <a class="btn btn-outline-primary" href="{{route('user.add_article')}}">Add Article</a>
    <br><br>
@endsection
@section('aside')
{{--    @parent--}}
@endsection

