@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                <h4>Create New Blog Post</h4>
                <form method="post" action="/posts">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Title of Blog</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name = "body" id = "body" cols = "30" rows = "10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection