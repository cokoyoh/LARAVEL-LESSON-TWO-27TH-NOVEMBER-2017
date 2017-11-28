@extends('layouts.app')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <h2>My Posts</h2>
                <ul class = "list-group">
                    @foreach($posts as $post)
                        <li class = "list-group-item">
                            {{$post->title}}
                            <button type="button" class="btn btn-default">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection