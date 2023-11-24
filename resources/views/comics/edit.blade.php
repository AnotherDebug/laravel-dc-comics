@extends('layouts.main')

@section('content')
    <h1 class="text-center">Edit Comic of: {{ $comic->title }}</h1>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col">


                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$comic->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" value="{{$comic->thumb}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price" value="{{$comic->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series" value="{{$comic->series}}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" value="{{$comic->sale_date}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" name="type" class="form-control" id="type" value="{{$comic->type}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{$comic->description}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>


            </div>
        </div>
    </div>
@endsection

@section('title')
    | Edit Comic
@endsection
