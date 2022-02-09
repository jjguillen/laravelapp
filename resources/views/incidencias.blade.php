@extends('layout')
 
@section('contenido')
        <h1>
            Incidencias
            <a href='/incidencias/create' class="btn btn-primary">Nueva</a>
        </h1>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Etiqueta</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($incidencias as $inc)
                    <tr onclick='redirect(this)' id="{{ $inc->id }}">
                        <td>{{ $inc->latitud }}</td>
                        <td>{{ $inc->longitud }}</td>
                        <td>{{ $inc->ciudad }}</td>
                        <td>{{ $inc->direccion }}</td>
                        <td>{{ $inc->etiqueta }}</td>
                        <td>{{ $inc->descripcion }}</td>
                        <td>{{ $inc->estado }}</td>
                        <td>
                            <div class="input-group input-group-sm mb-3">
                                <a href="/incidencias/delete/{{ $inc->id }}" class='btn btn-danger mb-1'>Borrar</a>
                                <a href="/incidencias/{{ $inc->id }}/edit" class='btn btn-warning'>Modificar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $incidencias->links() }}
@endsection


<script>
    function redirect(tr_object) {
        window.location.href = '/incidencias/'+tr_object.id;
    }
</script>
