@extends('layouts.app')
@section('sign_up')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.registration')}}" style="margin-right: 5px;">Sign up</a>
@endsection
@section('sign_in')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.login')}}">Sign in</a>
@endsection
@section('content')

<article class="blog-post">

    <h2 class="blog-post-title" style="text-align: center;"> {{$article -> title}}</h2>
    <p class="blog-post-meta">{{$article -> created_at ->format('d-m-y H:i')}} by <a href="#">{{$article -> author}}</a></p>
    <p>{!!$article -> full_text!!}</p>

</article>

@endsection
@section('aside')
    @parent
@endsection
