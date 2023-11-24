@extends('layouts.main')

@section('content')

<h1>Home</h1>

<p>In questo momento ci sono {{$comics}} Fumetti nel Database.</p>

@endsection

@section('title')
    | Home
@endsection
