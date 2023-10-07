@extends('layout/plantilla')

@section("tituloPagina","Actualizar Usuario")

@section('contenido')
<br><br>
<div class="card">
    <h5 class="card-header"><i class="bi bi-pen"></i> Actualizar usuario</h5>
    <div class="card-body">
       
      <p class="card-text">
            <form action="{{ route('usuarios.update',$usuarios->id)}}" method="POST">
                @csrf 
                @method ("PUT")
                <label for="">id Usuario:</label>
                <input type="text" name="id" class="form-control" required value="{{$usuarios->id}}">
                <label for="">Tipo Usuario:</label>
                <input type="text" name="idTipo_Usuario" class="form-control" required value="{{$usuarios->idTipo_Usuario}}">
                <label for="">Nombre:</label>
                <input type="text" name="Nombre" class="form-control" required value="{{$usuarios->Nombre}}">
                <label for="">Apellido:</label>
                <input type="text" name="Apellido" class="form-control" required value="{{$usuarios->Apellido}}">
                <label for="">E-Mail:</label>
                <input type="text" name="EMail" class="form-control" required value="{{$usuarios->EMail}}">
                <label for="">Telefono:</label>
                <input type="text" name="Telefono" class="form-control" required value="{{$usuarios->Telefono}}">
                <br>
                <button class="btn btn-warning"><i class="bi bi-pen"></i> Actualizar</button>
                <hr>
                <a href="{{route('usuarios.index')}}" class="btn btn-info"><i class="bi bi-arrow-counterclockwise"></i> Regresar</a>

            </form>

      </p>
      
    </div>
  </div>


@endsection
