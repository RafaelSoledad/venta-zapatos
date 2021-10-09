@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Editar registro</h1>
@stop

@section('content')
<form action="/calzado/{{$calzado->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input id="codigo" name="codigo" type="text" class="form-control" value="{{$calzado->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" value="{{$calzado->tipo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" value="{{$calzado->marca}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Modelo</label>
        <input id="modelo" name="modelo" type="text" class="form-control" value="{{$calzado->modelo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="text" class="form-control" value="{{$calzado->precio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Existencia</label>
        <input id="existencia" name="existencia" type="text" class="form-control" value="{{$calzado->existencia}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Imágen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" value="{{$calzado->imagen}}">
    </div>
    <a href="/calzado" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-warning">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop