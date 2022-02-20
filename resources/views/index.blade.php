@extends('layouts.app')
@section('sign_up')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.registration')}}" style="margin-right: 5px;">Sign up</a>
@endsection
@section('sign_in')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.login')}}">Sign in</a>
@endsection
@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        All articles

    </h3>
@foreach($articles as $article)
<div class="post-preview">
    <a href="{{route('show_article', ['id' => $article->id])}}">
        <h4 class="blog-post-title">{{$article -> title}}</h4>
    </a>
        <p class="blog-post-meta">{{$article -> created_at ->format('d-m-y H:i')}} by <a href="">{{$article -> author}}</a></p>
        <p class="post-subtitle" style="font-style: italic; font-size: 1.2rem;">{!! $article -> short_text !!}</p>
    <hr>
    <br>
</div>
@endforeach
{{$articles->render()}}
@endsection

@section('aside')
    @parent
@endsection
