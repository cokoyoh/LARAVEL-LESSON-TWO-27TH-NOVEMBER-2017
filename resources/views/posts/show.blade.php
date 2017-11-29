@extends('layouts.app')
@section('content')
    <div class = "container">
        <div class = "col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
            @include('layouts.partials.message')
            <h2>{{$post->title}}</h2>
            <p>
                {{$post->body}}
            </p>
        </div>
    </div>
@endsection