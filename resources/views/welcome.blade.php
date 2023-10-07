
@extends('layout/plantilla')

@section('titulo','Crud Con Laravel')

@section('contenido')
<br><br>
  <div class="card">
    <h5 class="card-header"><i class="bi bi-person-fill-check"></i> Crud Usuarios Laravel </h5>
     
      <div class="card-body">
        
        <h5 class="card-title text-center">Usuarios Del Sistema</h5><br>
        <p>
          <a href="{{route('usuarios.create')}}" class="btn btn-primary">
            <i class="bi bi-person-fill-add"></i> Crear Usuario Nuevo</a>
        </p><br>

        <div class="row">
          <div class="col-sm-12">
              @if ($mensaje = Session::get('success'))
                  <div id="M" class="alert alert-success" role="alert"><i class="bi bi-person-fill-check"></i>
                      {{ $mensaje }}
                  </div>
              @endif 
              @if ($mensaje = Session::get('success1'))
                  <div id="M" class="alert alert-warning" role="alert"><i class="bi bi-person-fill-check"></i>
                      {{ $mensaje }}
                  </div>
              @endif 
              @if ($mensaje = Session::get('success2'))
                  <div id="M" class="alert alert-danger" role="alert"><i class="bi bi-person-fill-check"></i>
                      {{ $mensaje }}
                  </div>
              @endif             
          
          
            </div>
      </div>
        
        <p class="card-text">
          <div class="table table-responsive">
              <table class="table table-sm table-bordered">
                <thead>
                  <th>idUsuario</th>
                  <th>Tipo Usuario</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>E-Mail</th>
                  <th>Telefono</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
                </thead>
                <tbody>

                  @foreach ($datos as $item)
                      
                  <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->idTipo_Usuario}}</td>
                      <td>{{$item->Nombre}}</td>
                      <td>{{$item->Apellido}}</td>
                      <td>{{$item->EMail}}</td>
                      <td>{{$item->Telefono}}</td>

                      <td>
                        <form action="{{ route('usuarios.edit', $item->id)}}" method="GET">

                            <button class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></button>

                        </form>

                      </td>

                      <td>
                        <form action="{{ route('usuarios.show', $item->id)}}" method="GET">

                          <button class="btn btn-danger btn-sm"><i class="bi bi-person-fill-slash"></i></button>                          
          
                        </form>
                      </td>

                  </tr>
                  @endforeach

                </tbody>
              </table>
          </div>

        </p>
      </div>
  </div>
  @endsection



    <!--div class="row">
    <h1> hola con blade </h1>
                          
    {{print_r($datos);}}

    <i class="bi bi-airplane-engines"></i>
    <a href="{{route('usuarios.create')}}">Agregar</a>

    </div-->

