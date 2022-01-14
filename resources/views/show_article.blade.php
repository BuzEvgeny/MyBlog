@extends('layouts.app')
@section('content')

<article class="blog-post">

    <h2 class="blog-post-title">{!! $article -> title !!}</h2>
    <p class="blog-post-meta">{!! $article -> created_at ->format('d-m-y H:i') !!} by <a href="#">{!! $article -> author !!}</a></p>
    <p>{!! $article -> full_text !!}</p>

</article>

@endsection
@section('aside')
    @parent
@endsection
