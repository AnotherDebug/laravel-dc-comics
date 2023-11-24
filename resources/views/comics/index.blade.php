@extends('layouts.main')

@section('content')
    <h1>Lista Fumetti</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di vendita</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td><a href="{{route('comics.show', $comic->id)}}"><button class="btn btn-info"><i class="fa-solid fa-book-open"></i></button></a></td>
                    <td><a href="#"><button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $comics->links() }}

@endsection

@section('title')
    | List
@endsection
