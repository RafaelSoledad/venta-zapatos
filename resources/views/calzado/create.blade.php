@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Crear registro</h1>
@stop

@section('content')
<form action="/calzado" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>

        <select name="tipo" id="tipo" class="form-control" tabindex="2">
            <option value="">...</option>
            <option value="Tenis">Tenis</option>
            <option value="zapatillas">Zapatillas</option>
            <option value="sandalias">Sandalias</option>
            <option value="botas">Botas</option>
            <option value="zapatos">Zapatos</option>
            <option value="mocasines">Mocasines</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="text" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Existencia</label>
        <input id="existencia" name="existencia" type="text" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imágen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" tabindex="7">
    </div>
    <a href="/calzado" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-warning" tabindex="7">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop