
<div>
    <div>
        <div>
            <h2>CRUD de Computadoras</h2>
        </div>
        <div>
            <a href="{{route('computers.create')}}">Añadir computadora</a>
        </div>
    </div>

    @if(Session::get('success'))
    <div>
        <strong>{{Session::get('success')}}</strong><br><br>
    </div>
    @endif

    <div>
        <table>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Descripcion</th>
            </tr>

            @foreach ($computers as $computer)
            <tr>
                <td>{{$computer->marca}}</td>
                <td>{{$computer->modelo}}</td>
                <td>
                    <span>{{$computer->serial}}</span>
                </td>
                <td>{{$computer->descripcion}}</td>
                <td>
                    <a href="{{route('computers.edit', $computer)}}">Editar</a>
                    <form action="{{route('computers.destroy', $computer)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
