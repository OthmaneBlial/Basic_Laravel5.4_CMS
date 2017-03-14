@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/posts" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" type="text" class="form-control" id="" placeholder="Enter Title" required="required">
            </div>

            <div class="form-group">
            <label for="">Body</label>
            <textarea name="body" id="inputBody" class="form-control" rows="5" required="required"></textarea>

            </div>

            <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" id="inputCategory" class="form-control" required="required">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>

            <input type="hidden" name="user_id" id="inputUser_id" class="form-control" value="{{ Auth::user()->id }}">

           
            <button type="submit" class="btn btn-primary">Publish a post</button>
        </form>

        </div>
    </div>
</div>
@endsection
