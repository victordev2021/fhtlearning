@extends('adminlte::page')

@section('title', 'fht System')

@section('content_header')
    <h1>Crear nueva categoría</h1>
@stop

@section('content')
    {!! Form::open(['route' => 'admin.categories.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría']) !!}
    </div>
    @error('name')
        <span class="text-sm text-danger">{{ $message }}</span>
        <br>
    @enderror
    {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary mt-2 float-right']) !!}
    {!! Form::close() !!}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
