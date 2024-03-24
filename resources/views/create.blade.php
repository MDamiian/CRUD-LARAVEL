@extends('layouts.base')

@section('content')
<div>
    <div>
        <div>
            <h2>Agregar computadora</h2>
        </div>
        <div>
            <a href="{{route('computers.index')}}">Volver</a>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('computers.store')}}" method="POST" class="">
        @csrf
        <div>
            <div>
                <div>
                    <strong>Marca:</strong>
                    <input type="text" name="marca" placeholder="Marca" id="marca">
                </div>
            </div>
            <div>
                <div>
                    <strong>Modelo:</strong>
                    <input type="text" name="modelo" placeholder="Modelo" id="modelo">
                </div>
            </div>
            <div>
                <div>
                    <strong>Serial:</strong>
                    <input type="text" name="serial" placeholder="Serial" id="serial">
                </div>
            </div>
            <div>
                <div>
                    <strong>Descripción:</strong>
                    <textarea style="height:150px" name="descripcion" placeholder="Descripción" id="descripcion"></textarea>
                </div>
            </div>
            <div>
                <button type="submit">Agregar</button>
            </div>
        </div>
    </form>
</div>
@endsection