@extends('layouts.app')
@section('logout')
    <a class="btn btn-sm btn-outline-secondary" href="{{route('user.logout')}}">Logout</a>
@endsection
@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Add article
    </h3>
    <form action="{{route('user.create_article') }}" method="POST">
        @csrf
        <input type="hidden" value="{{auth()->id()}}" name="user_id">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Author</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="author" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" >
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Category</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="category" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Short text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="short_text" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Full text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="full_text" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <br><br>
    </form>

@endsection
@section('aside')

@endsection

