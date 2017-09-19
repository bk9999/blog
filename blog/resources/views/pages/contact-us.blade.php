@extends('main')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr/>
        <form>
            <div class="form-group">
                <label class="form-control-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Your Email">
            </div>                        
            <div class="form-group">
                <label class="form-control-label" for="comment">Comment</label>
                <textarea class="form-control" id="comment" row="5" placeholder="Your Comment"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>                    
    </div>
</div>

@endsection