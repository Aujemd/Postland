@extends('Layouts.app')
@section('content')
  <div  class="container">

    <div class="card border border-dark p-3" style="w-100">

      <div class="row no-gutters">

        <div class="col-md-4">
          <img src="https://ui-avatars.com/api/?name=John+Doe&size=255" class="card-img" alt="...">
        </div>

        <div class="col-md-8 ">
          
          <div class="card-body w-100">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <p class="card-text"><small class="text-muted">Last Updated {{$post->updated_at}}</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection