@extends('layouts.layout')


@section('contenido')
    
    {{-- Menu --}}
    @include('articulos.partials.menu')

    {{-- Lista de articulos --}}
    <legend>Lista articulos</legend>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Modelo</th>
                <th>Categoria</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
            
    <tbody>
            <li>No hay articulos</li>
    </tbody>
    </table>
<br><br><br>
@endsection
