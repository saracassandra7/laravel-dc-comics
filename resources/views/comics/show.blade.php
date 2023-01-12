@extends('layout.main')

@section('content')
<div class="container">
    <h1 class="m-3">{{$comic->title}}</h1>
    <div><span>Serie: {{$comic->series}}</span></div>
    <div>Prezzo: <strong>&euro; {{$comic->price}}</strong></div>
    <div>Tipo: <strong>{{$comic->type}}</strong></div>
    <div><span>Data di uscita: {{$comic->sale_date}}</span></div>
    <div class="text-center">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
    <p class="m-3">{{$comic->description}}</p>
    <a class="btn btn-info" href="{{route('comics.index')}}">Indietro</a>
</div>

@endsection
