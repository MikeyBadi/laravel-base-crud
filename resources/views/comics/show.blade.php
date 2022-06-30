@extends('layout.main')

@section('content')

    <div class="container">
        {{-- @dump($comic) --}}
        <h1>Title: {{$comic->title}}</h1>
        <img src="{{$comic->image}}" alt="{{$comic->title}}">
        <h3>Type: {{$comic->type}}</h3>
        <a class="btn btn-success" href="{{route('Comics.index')}}">Torna indietro</a>
        <a href="{{route('Comics.edit', $comic)}}" class="btn btn-primary">EDIT</a>
    </div>

@endsection
