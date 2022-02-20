@extends('layouts.app')
@section('logout')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.logout')}}">Logout</a>
@endsection
@section('content')

    <article class="blog-post">

        <h2 class="blog-post-title">{{ $article -> title }}</h2>
        <p class="blog-post-meta">{{ $article -> created_at ->format('d-m-y H:i') }} by <a href="#">{{ $article -> author }}</a></p>
        <p>{!! $article -> full_text !!}</p>

    </article>
        <br>
            <a class="btn btn-outline-primary" href="{{route('user.update_article', ['id' => $article->id])}}">Edit Article</a>
        <br>
        <br>
            <a class="btn btn-outline-primary" href="{{route('user.delete_article', ['id' => $article->id])}}">Delete Article</a>
        <br><br>
@endsection
@section('aside')

@endsection
