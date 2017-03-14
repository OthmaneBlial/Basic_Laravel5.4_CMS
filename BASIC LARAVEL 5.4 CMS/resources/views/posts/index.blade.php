@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        


        <a href="/posts/create"><button type="button" class="btn btn-lg btn-info">Create a new Post</button></a><hr>
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                        <td><a href="/posts/edit/{{ $post->id }}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><a href="/posts/delete/{{ $post->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>
    </div>
</div>
@endsection
