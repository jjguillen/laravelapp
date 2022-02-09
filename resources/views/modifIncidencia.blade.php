@extends('layout')
  
@section('contenido')
<form method="POST" action="/incidencias/{{ $inc->id }}" class='mb-2'>
    @csrf
    <h1>Modificar incidencia</h1>

    <div class="mb-3 col-3">
        <label class="form-label">Latitud</label>
        <input type="text" class="form-control" id="latitud" name="latitud" value="{{ $inc->latitud }}">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Longitud</label>
        <input type="text" class="form-control" id="longitud" name="longitud" value="{{ $inc->longitud }}">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $inc->ciudad }}">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $inc->direccion }}">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Etiqueta</label>
        <input type="text" class="form-control" id="etiqueta" name="etiqueta" value="{{ $inc->etiqueta }}">
    </div>
    <div class="mb-3 col-5">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $inc->descripcion }}</textarea>
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value="{{ $inc->estado }}">
    </div>

    <button type="submit" class="btn btn-primary">Modificar</button>
</form>
@endsection
