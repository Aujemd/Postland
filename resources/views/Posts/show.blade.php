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
            
            <div class="d-flex justify-content-around flex-wrap">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#exampleModalLong">
                Modify
              </button>
  
              <!-- Modal -->
              <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title" id="exampleModalLongTitle">Modify Your Post</h1>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{config('app.url')}}./posts/{{$post->id}}" method="POST">
                        @csrf 
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="content">Post</label>
                            <textarea name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#deletePostModal">
                Delete
              </button>
  
              <!-- Modal -->
              <div class="modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title bold" id="exampleModalLongTitle">¿Are you Sure?</h1>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{config('app.url')}}./posts/{{$post->id}}" method="POST">
                        @csrf 
                        @method('delete')
                        <p class=" text-muted italic">"This Post will be destroyed forever"</p>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger">Yes, I'm sure delete this</button>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection