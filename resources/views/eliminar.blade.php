@extends('layout/plantilla')

@section("tituloPagina","Eliminar Usuario")

@section('contenido')
<br><br>
<div class="card">
    <h5 class="card-header"><i class="bi bi-person-fill-slash"></i> Eliminar Usuario </h5>
    <div class="card-body">
      
      <p class="card-text">

        <div class="alert alert-danger" role="alert">
            Se Eliminara El Registro, Esta Seguro ???
            <br><br>
            <table class="table table-sm table-hover">
                <thead>
                  <th>idUsuario</th>
                  <th>Tipo Usuario</th>                 
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>E-Mail</th>
                  <th>Telefono</th>
                </thead>
                <tbody>
                  <tr>
                  <td>{{$usuarios->id}}</td>
                  <td>{{$usuarios->idTipo_Usuario}}</td>
                  <td>{{$usuarios->Nombre}}</td>
                  <td>{{$usuarios->Apellido}}</td>
                  <td>{{$usuarios->EMail}}</td>
                  <td>{{$usuarios->Telefono}}</td>                  
                  </tr>
                </tbody>
              </table>
              <hr>
              <form action="{{route('usuarios.destroy', $usuarios->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('usuarios.index')}}" class="btn btn-info"><i class="bi bi-arrow-counterclockwise"></i> Regresar</a>
                <button class="btn btn-danger"><i class="bi bi-person-fill-slash"></i> Eliminar</button>
                

              </form>

          </div>

      </p>
      
    </div>
  </div>


@endsection
