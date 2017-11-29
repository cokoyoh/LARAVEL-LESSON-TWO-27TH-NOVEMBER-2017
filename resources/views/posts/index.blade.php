@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
            @include('layouts.partials.message')
            @foreach($posts as $post)
                <div class="panel" >
                    <div class="panel-header">
                        <div class="panel-title">
                            <div class="well">
                                <a href = "/posts/{{$post->id}}"> <h4>{{$post->title}}</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        {{$post->body}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection