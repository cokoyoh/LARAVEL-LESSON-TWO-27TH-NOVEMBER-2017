@extends('layouts.app')
@section('content')
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                @include('layouts.partials.message')
                <h2>My Posts</h2>
                <ul class = "list-group">
                    @foreach($posts as $post)
                        <li class = "list-group-item">
                            {{$post->title}}
                           <a href = "{{'/posts/'.$post->id.'/edit'}}" class="btn btn-sm btn-default pull-right">Edit</a>
                            <form class="form-group pull-right" action="{{'/posts/'.$post->id}}" METHOD="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-sm btn-danger pull-right" value="delete">Delete</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection