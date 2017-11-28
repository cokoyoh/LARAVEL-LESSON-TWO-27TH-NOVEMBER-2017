@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <ul class="list-group">
                            <li class="list-group-item"><a href = "/posts">Read Available Blogs</a></li>
                            <li class="list-group-item"><a href = "posts/create">Add New Blog</a> </li>
                            <li class="list-group-item">See Your Blogs</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
