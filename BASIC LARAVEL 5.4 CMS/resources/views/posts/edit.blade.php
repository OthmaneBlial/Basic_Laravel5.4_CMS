@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           

        <form action="/posts/{{ $post->id }}" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Editing a Post</legend>
        
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class="form-control" id="" placeholder="Enter Title" required="required" value="{{ $post->title }}">
            </div>

            <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="inputBody" class="form-control" rows="5" required="required">{{ $post->body }}</textarea>
            </div>

            <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="inputCategory" class="form-control" required="required">
                @foreach ($categories as $category)
                @if ($category->name != $category_of_post->name )
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
                <option value="{{ $category_of_post->id }}" selected>{{ $category_of_post->name }}</option>              
            </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Edit a post</button>
        </form>

        </div>
    </div>
</div>
@endsection
