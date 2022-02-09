@extends('layout')
  
@section('contenido')
<form method="POST" action="/incidencias">
    @csrf
    <h1>Nueva incidencia</h1>

    <div class="mb-3 col-3">
        <label class="form-label">Latitud</label>
        <input type="text" class="form-control" id="latitud" name="latitud">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Longitud</label>
        <input type="text" class="form-control" id="longitud" name="longitud">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>
    <div class="mb-3 col-3">
        <label class="form-label">Etiqueta</label>
        <input type="text" class="form-control" id="etiqueta" name="etiqueta">
    </div>
    <div class="mb-3 col-5">
        <label class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
    </div>

    <input type="hidden" id="estado" name="estado" value="abierta">

    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection