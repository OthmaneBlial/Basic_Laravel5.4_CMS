@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        

        @foreach ($posts as $post)   
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post->body }}</</p>
        <p>created by {{ $post->user->name }}</p>
        <br>
        @endforeach


        </div>
    </div>
</div>
@endsection
