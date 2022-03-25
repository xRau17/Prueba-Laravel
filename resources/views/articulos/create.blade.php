@extends('layouts.layout')


@section('contenido')

{{-- Menu de articulos
@include('articulos.partials.menu') --}}

<div class="card-body">
  <form action="#" method="POST">
    @csrf 
      
      <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" required-autocomplete="descripcion" autofocus>
      </div>

      <div class="mb-3">
          <label for="modelo" class="form-label">Modelo</label>
          <input type="text" class="form-control" name="modelo" required-autocomplete="modelo" autofocus>
      </div>

      <div class="mb-3">
          <label for="categoria_id" class="form-label">Categoría</label>
          <input type="text" class="form-control" name="categoria_id" required-autocomplete="categoria_id" autofocus>
      </div>

      <div class="mb-3">
          <label for="unidades" class="form-label">Unidades</label>
          <input type="number" class="form-control" name="unidades" required-autocomplete="unidades" autofocus>
      </div>

      <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="number" class="form-control" name="codigo" required-autocomplete="codigo" autofocus>
      </div>

      <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" required-autocomplete="precio" autofocus>
      </div>
      
      <br>
      <div class="catd-footer text-muted">
        <a class="btn btn-secondary" role="button" href="{{ route('articulos') }}">Cancelar</a>
        <button type="reset" class="btn btn-danger">Borrar</button>
        <button type="submit" class="btn btn-primary" href="#">Crear</button>
      </div>
  </form>
</div>

@endsection