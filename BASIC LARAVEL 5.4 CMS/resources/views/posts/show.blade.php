@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            

        <h1>{{ $post->title}}</h1>
        <p class="lead">{{ $post->body}}</p>
        <p>Created by {{ $post->user->name}} </p>

        <p>Tags : 
        @foreach ($post->tags as $tag)
        <a href="/tags/{{ $tag->name }}">{{ $tag->name }}</a>
        @endforeach
        </p>
       	<hr><br>


       	<div class="row">
       		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
       			<form action="/comments" method="POST" role="form">
       			{{ csrf_field() }}
       			
       				<div class="form-group">
       					<input type="text" name="email" class="form-control" id="" placeholder="Enter your Email" required="required">
       				</div>


       				<div class="form-group">
       				<textarea name="comment" id="inputComment" class="form-control" rows="2" placeholder="Enter your comment" required="required">
       				</textarea>
       				</div>
       				
       				<input type="hidden" name="post_id" value="{{ $post->id }}">

              <input type="hidden" name="user_id" id="inputUser_id" class="form-control" value="{{ Auth::user()->id }}">

       				<div class="form-group">
       				<button type="submit" class="btn btn-primary">Submit a comment</button>
       				</div>
       			</form>
       		</div>
       	</div>

       	<hr>

        @foreach ($post->comments as $comment)
        <div class="panel panel-primary">
        	<div class="panel-body">
        		<p>{{ $comment->email }} has said: </p>
        		<p>{{ $comment->comment }} at {{ $comment->created_at }}</p>
            <p>Created by {{ $comment->user->name }}</p> 
        		<a href="/comments/edit/{{ $comment->id }}"><button type="button" class="btn btn-sm btn-default">Edit</button></a>
        		<a href="/comments/delete/{{ $comment->id }}"><button type="button" class="btn btn-sm btn-default">Delete</button></a>
        	</div>
        </div>
        @endforeach


        </div>
    </div>
</div>
@endsection



