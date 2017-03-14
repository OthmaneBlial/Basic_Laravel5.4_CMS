@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            

        <form action="/categories" method="POST" role="form">
            {{ csrf_field() }}

            <legend>Editing a category</legend>
        
            <div class="form-group">
                <label for="">Name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Enter name" required="required">
            </div>

            
           
            <button type="submit" class="btn btn-primary">Create a category</button>
        </form>

        </div>
    </div>
</div>
@endsection
