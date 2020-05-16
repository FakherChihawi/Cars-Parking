@extends('layouts.main')


@section('content')
    <h1>Create Form</h1>
    {!! Form::open(['action' => 'PlaceController@store', 'method' =>'POST']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title..']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'body') !!}
            {!! Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body..']) !!}
        </div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
