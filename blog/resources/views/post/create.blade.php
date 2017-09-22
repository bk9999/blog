@extends('main')

@section('title', '| Create New Post')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Create New Post</h1>
        <hr/>
        <form method="POST" action="/posts">
            <div class="form-group">
                <label for='title' class="col-form-label">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title" class="form-control"/>
            </div>
            <div class="form-group">
                <label for='body' class="col-form-label">Body:</label>
                <textarea id="body" name="body" class="form-control" rows="10"></textarea>
            </div>     
            {{ csrf_field() }}
            <button type="submit" class="btn btn-outline-success btn-lg btn-block" value="Create Post">Submit</button>
        </form>
    </div>
</div>

@endsection

