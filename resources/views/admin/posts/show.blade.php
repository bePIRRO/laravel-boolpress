@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p class="mt-5">{{$post->content}}</p>
        <figure>
            <img src="{{$post->image}}" alt="" class="img-fluid">
        </figure>
        <div>
            Scritto il: {{$post->getFormattedDate("created_at", "d/m/Y")}}, {{$post->getFormattedDate("created_at", "H:i")}}
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{route("admin.posts.index")}}" class="btn btn-secondary">Torna alla lista</a>
        </div>
    </div>
@endsection