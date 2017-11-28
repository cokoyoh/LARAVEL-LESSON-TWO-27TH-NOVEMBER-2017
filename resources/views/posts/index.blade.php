@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($posts as $post)
           <div class="panel">
               <div class="panel-header">
                   <div class="panel-title">
                       <h4>{{$post->title}}</h4>
                   </div>
               </div>
               <div class="panel-body">
                   {{$post->body}}
               </div>
           </div>
        @endforeach
    </div>
@endsection