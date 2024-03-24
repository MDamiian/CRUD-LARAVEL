@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a href="{{ route('computers.create') }}" class="btn btn-primary">Añadir computadora</a>
        </div>
    </div>

    @if(Session::get('success'))
    <div class="alert alert-success mt-3">
        <strong>{{ Session::get('success') }}</strong>
    </div>
    @endif

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serial</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer->marca }}</td>
                    <td>{{ $computer->modelo }}</td>
                    <td>{{ $computer->serial }}</td>
                    <td>{{ $computer->descripcion }}</td>
                    <td>
                        <a href="{{ route('computers.edit', $computer) }}" class="btn btn-info btn-sm">Editar</a>
                        <form action="{{ route('computers.destroy', $computer) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop