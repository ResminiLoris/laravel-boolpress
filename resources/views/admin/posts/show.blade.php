@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1 class="mb-4">{{$post->title}}</h1>
        <img src="{{$post->image}}" class="mb-4" alt="">
        <p class="mb-4">{{$post->content}}</p>
        <address class="mb-4">{{$post->created_at}}</address>
    </div>
@endsection