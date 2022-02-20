@extends('layouts.app')
@section('logout')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.logout')}}">Logout</a>
@endsection
@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Edit article
    </h3>
    <form action="{{route('user.edit_article') }}" method="POST">
        @csrf
        <input type="hidden" value="{{$article->id}}" name="article_id">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{$article->title}}" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Category</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="category" value="{{$article->category}}" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Short text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="short_text" rows="2" >{!!$article->short_text!!}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Full text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="full_text" rows="5" >{!!$article->full_text!!}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
        <br><br>
    </form>

@endsection
@section('aside')

@endsection

