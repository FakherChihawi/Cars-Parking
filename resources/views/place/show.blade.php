@extends('layouts.main')

@section('content')
    <a href="/place/" class="btn btn-desault">Go Back</a>
    <h1>Place Num {{ $place->id }}</h1>
    <p>Etat: {{ $place->etat}}</p>
    <hr>
    <small>writen in {{ $place->created_at }}</small>

@endsection
