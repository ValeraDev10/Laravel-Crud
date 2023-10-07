@extends('layout/plantilla')

@section("tituloPagina","Crear Nuevo Usuario")

@section('contenido')
<br><br>
<div class="card">
    <h5 class="card-header"><i class="bi bi-person-fill-add"></i> Crear Usuario Nuevo</h5>
    <div class="card-body">
      
      <p class="card-text">
            <form action="{{route('usuarios.store')}}" method="POST">
                @csrf
                <label for="">id Usuario:</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Tipo Usuario:</label>
                <input type="text" name="idTipo_Usuario" class="form-control" required>
                <label for="">Nombre:</label>
                <input type="text" name="Nombre" class="form-control" required>
                <label for="">Apellido:</label>
                <input type="text" name="Apellido" class="form-control" required>
                <label for="">E-Mail:</label>
                <input type="text" name="EMail" class="form-control" required>
                <label for="">Telefono:</label>
                <input type="text" name="Telefono" class="form-control" required>
                <br>
                <button class="btn btn-primary"><i class="bi bi-person-fill-add"></i> Crear</button>
                <hr>
                <a href="{{route('usuarios.index')}}" class="btn btn-info"><i class="bi bi-arrow-counterclockwise"></i> Regresar</a>

            </form>

      </p>
      
    </div>
  </div>


@endsection
