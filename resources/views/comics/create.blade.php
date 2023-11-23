@extends('layouts.main')

@section('content')
    <h1 class="text-center">Add new Comic</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col">


                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" name="thumb" class="form-control" id="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" name="series" class="form-control" id="series">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di vendita</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" name="type" class="form-control" id="type">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary">Aggiungi</button>
                    <button type="reset" class="btn btn-primary">Elimina</button>
                </form>


            </div>
        </div>
    </div>
@endsection

@section('title')
    | Add new Comic
@endsection
