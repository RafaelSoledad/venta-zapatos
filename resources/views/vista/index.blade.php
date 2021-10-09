@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Agregar calzado</h1>
@stop

@section('content')

<!--@if (Route::has('login'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">{{ __('Página') }}</a>
    </li>
@endif-->

<table id="calzado" class="table table-striped table-border shadow-lg mt-4">
    <thead class="bg-warning text-dark"> 
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Código</th>
        <th scope="col">Tipo</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
        <th scope="col">Exitencia</th>
        <th scope="col">Imágen</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($calzado as $calzado_)
        <tr>
            <td>{{$calzado_->id}}</td>
            <td>{{$calzado_->codigo}}</td>
            <td>{{$calzado_->tipo}}</td>
            <td>{{$calzado_->marca}}</td>
            <td>{{$calzado_->modelo}}</td>
            <td>{{$calzado_->precio}}</td>
            <td>{{$calzado_->existencia}}</td>
            <td>{{$calzado_->imagen}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#calzado').DataTable({
            "lengthMenu": [[5,10,50,-1], [5,10,50, "All"]]
        });
    } );
</script>
@stop
