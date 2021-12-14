@extends('adminlte::page')

@section('title', 'fht System')

@section('content_header')
    <a class="btn btn-primary float-right" href="{{ route('admin.prices.create') }}">Nuevo precio</a>
    <h1>Lista de precios</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">{{ session('info') }}</div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        {{-- <th>Value</th> --}}
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->name }}</td>
                            {{-- <td>{{ $price->value }}</td> --}}
                            <td width=10px>
                                <a class="btn btn-primary" href="{{ route('admin.prices.edit', $price) }}">Editar</a>
                            </td>
                            <td width=10px>
                                <form action="{{ route('admin.prices.destroy', $price) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
