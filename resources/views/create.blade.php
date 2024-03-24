@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Agregar computadora</h2>
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

    <form id="addComputerForm" action="{{ route('computers.store') }}" method="POST">
        @csrf
        <div class="mt-4">
            <div class="form-group">
                <label for="marca"><strong>Marca:</strong></label>
                <input type="text" name="marca" class="form-control" placeholder="Marca" id="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo"><strong>Modelo:</strong></label>
                <input type="text" name="modelo" class="form-control" placeholder="Modelo" id="modelo" required>
            </div>
            <div class="form-group">
                <label for="serial"><strong>Serial:</strong></label>
                <input type="text" name="serial" class="form-control" placeholder="Serial" id="serial" required>
            </div>
            <div class="form-group">
                <label for="descripcion"><strong>Descripción:</strong></label>
                <textarea name="descripcion" class="form-control" style="height: 150px;" placeholder="Descripción" id="descripcion"></textarea>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success">Agregar</button>
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
<script>
    document.getElementById('addComputerForm').addEventListener('submit', function(event) {
        var marca = document.getElementById('marca').value;
        var modelo = document.getElementById('modelo').value;
        var serial = document.getElementById('serial').value;

        if (!marca || !modelo || !serial) {
            event.preventDefault(); // Prevent form from submitting
            alert('Por favor, completa los campos de marca, modelo y serial.');
        }
    });
</script>
@stop