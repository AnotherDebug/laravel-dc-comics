@extends('layouts.main')

@section('content')
    <h1 class="text-center">{{$comic->title}}</h1>

    <div class="container-fluid text-center mb-5">
        <div class="card m-auto" style="width: 20rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <p class="card-title"><span class="fw-bold">Descrizione:</span> {{$comic->description}}</p>
                <p class="card-title"><span class="fw-bold">Serie:</span> {{$comic->series}}</p>
                <p class="card-title"><span class="fw-bold">Prezzo:</span> {{$comic->price}}</p>
                <p class="card-title"><span class="fw-bold">Data di vendita:</span> {{$comic->sale_date}}</p>
                <p class="card-title"><span class="fw-bold">Tipo:</span> {{$comic->type}}</p>
            </div>
        </div>
    </div>
@endsection

@section('title')
    | Info
@endsection
