@extends('Layouts.app')

@section('content')
  <div class="d-flex flex-wrap row">
    @foreach ($posts as $post)
      <div class="col-md-3">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="..." class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="{{config('app.url')}}./posts/{{$post->id}}">{{$post->title}}</a></h5>
                <p class="card-text">{{$post->content}}</p>
                <p class="card-text"><small class="text-muted">Last Updated {{$post->updated_at}}</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection