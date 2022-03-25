@extends('layouts.layout')


@section('contenido')
    {{-- Contenido del home  --}}
    <div class="h-40 p-5 bg-light border rounded-3">
        <h2>Bienvenidos a la tienda</h2>
        
        <p>Contenido</p>
        <a href="{{ route('articulos') }}" class="btn btn-outline-secondary" type="button">Artículos</a>
    </div>
@endsection