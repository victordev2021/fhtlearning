@extends('adminlte::page')

@section('title', 'fht System')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="h4">Nombre:</h1>
            <p class="form-control">{{ $user->name }}</p>
            <h1 class="h4">Lista de Roles</h1>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Asignar Role', ['class' => 'mt-2 btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
