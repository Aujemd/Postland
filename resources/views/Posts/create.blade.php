@extends('Layouts.app')
@section('content')
    <form action="{{config('app.url')}}./posts" method="POST">
        @csrf 
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Post</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection