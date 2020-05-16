@extends('layouts.main')

@section('content')

    <h1>POSTS</h1>
    @if (count($places) > 1)
        @foreach ($places as $place)
            <div class="well">
                <h3><a href="/place/{{ $place->id }}">{{ $place->id }}</a></h3>
                <small>writen in {{ $place->created_at }}</small>
            </div>
        @endforeach
    @else
        <h3>No found</h3>
    @endif

@endsection
