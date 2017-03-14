@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <form action="/comments/{{ $comment->id }}" method="POST" role="form">
                {{ csrf_field() }}
                
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="" placeholder="Enter your Email" required="required" value="{{ $comment->email }}">
                    </div>

                    <div class="form-group">
                    <textarea name="comment" id="inputComment" class="form-control" rows="2" placeholder="Enter your comment" required="required">{{ $comment->comment }}
                    </textarea>
                    </div>
                    
                    <input type="hidden" name="post_id" value="{{ $comment->post_id}}">

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update a comment</button>
                    </div>
                </form>
            </div>
        </div>


        </div>
    </div>
</div>
@endsection
