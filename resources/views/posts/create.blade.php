@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'methode' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['classes' => 'form-control','placeholder' => 'Title'])}}
    </div>
    {!! Form::close() !!}


@endsection
