@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Editar computadora</h2>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('computers.update', $computer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mt-4">
            <div class="form-group">
                <label for="marca"><strong>Marca:</strong></label>
                <input type="text" name="marca" class="form-control" placeholder="Marca" id="marca" value="{{ $computer->marca }}">
            </div>
            <div class="form-group">
                <label for="modelo"><strong>Modelo:</strong></label>
                <input type="text" name="modelo" class="form-control" placeholder="Modelo" id="modelo" value="{{ $computer->modelo }}">
            </div>
            <div class="form-group">
                <label for="serial"><strong>Serial:</strong></label>
                <input type="text" name="serial" class="form-control" placeholder="Serial" id="serial" value="{{ $computer->serial }}">
            </div>
            <div class="form-group">
                <label for="descripcion"><strong>Descripción:</strong></label>
                <textarea name="descripcion" class="form-control" style="height: 150px;" placeholder="Descripción" id="descripcion">{{ $computer->descripcion }}</textarea>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{ route('computers.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </form>
</div>

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

@stop