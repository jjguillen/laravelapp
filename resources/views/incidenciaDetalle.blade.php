@extends('layout')
  
@section('contenido')
        <h1>Incidencia num: {{ $inc->id }}</h1>

        <ul>
            <li>{{ $inc->latitud }}</li>
            <li>{{ $inc->longitud }}</li>
            <li>{{ $inc->ciudad }}</li>
            <li>{{ $inc->direccion }}</li>
            <li>{{ $inc->etiqueta }}</li>
            <li>{{ $inc->descripcion }}</li>
            <li>{{ $inc->estado }}</li>
        </ul>

        <button class='btn btn-primary' onclick='history.back()'>Volver</button>
@endsection
        
    