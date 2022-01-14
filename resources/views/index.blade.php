@extends('layouts.app')
@section('content')
@foreach($articles as $article)
<div class="post-preview">
    <a href="{!! route('show_article', [
    'id'   => $article->id,
    'slug' => str_slug($article->title)
]) !!}">
        <h2 class="blog-post-title">{!! $article -> title !!}</h2>
        <p class="blog-post-meta">{!! $article -> created_at ->format('d-m-y H:i') !!} by <a href="#">{!! $article -> author !!}</a></p>
        <h3 class="post-subtitle">{!! $article -> short_text !!}</h3>

    </a>
</div>
@endforeach
@endsection
@section('aside')
    @parent
@endsection
