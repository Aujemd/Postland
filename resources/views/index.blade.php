@extends('Layouts.layout')
@section('content')
    <div class="h-100 banner d-flex justify-content-center align-items-center flex-wrap">
   
        <div class="container">
                <div class="w-100 text-center p-0 m-0">
                        <h1 class="text-white display-1">Postland</h1><br>
                        <h3 class="text-white display-4 p-1">The place for publish all your great ideas</h3 class="text-white display-4">
                     </div>
            <div class="d-flex justify-content-around flex-wrap m-5">
                <div class="row w-100">
                    <div class="col-sm-6">
                        <a class="btn btn-lg btn-primary text-white btn-block m-2" href="{{config('app.url')}}/login"><h3 class=""><i class="fas fa-sign-in-alt"></i> Login</h3></a>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-lg btn-primary text-white btn-block m-2" href="{{config('app.url')}}/register"><h3 class=""><i class="fas fa-users"></i> Sign Up</h3></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection