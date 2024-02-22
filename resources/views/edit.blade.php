@extends('layouts.base')

@section('content')
<div>
    <div>
        <div>
            <h2>Editar computadora</h2>
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

    <form action="{{route('computers.update', $computer)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div>
                <div>
                    <strong>Marca:</strong>
                    <input type="text" name="marca" placeholder="Marca" id="marca" value="{{$computer->marca}}">
                </div>
            </div>
            <div>
                <div>
                    <strong>Modelo:</strong>
                    <input type="text" name="modelo" placeholder="Modelo" id="modelo" value="{{$computer->modelo}}">
                </div>
            </div>
            <div>
                <div>
                    <strong>Serial:</strong>
                    <input type="text" name="serial" placeholder="Serial" id="serial" value="{{$computer->serial}}">
                </div>
            </div>
            <div>
                <div>
                    <strong>Descripción:</strong>
                    <textarea style="height:150px" name="descripcion" placeholder="Descripción" id="descripcion">{{$computer->marca}}</textarea>
                </div>
            </div>
            <div>
                <button type="submit">Actualizar</button>
            </div>
        </div>
    </form>
</div>
@endsection