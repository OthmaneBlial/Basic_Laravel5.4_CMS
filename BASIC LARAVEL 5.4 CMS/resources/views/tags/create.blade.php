@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/tags" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Creating a tag</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter name" required="required">
            </div>

            
           
            <button type="submit" class="btn btn-primary">Create a tag</button>
        </form>

        </div>
    </div>
</div>
@endsection
