<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
   
    public function index()
    {
        //pagina inicio
        $datos = Usuarios::all();
        return view('welcome',compact('datos'));
    }

   
    public function create()
    {
        //agregar datos
        return view('crear');
    }


    public function store(Request $request)
    {
       //guardar datos en la BD
       //print_r($_POST);
       $usuarios = new Usuarios();
       $usuarios->id = $request->post('id');
       $usuarios->idTipo_Usuario = $request->post('idTipo_Usuario');
       $usuarios->Nombre = $request->post('Nombre');
       $usuarios->Apellido = $request->post('Apellido');
       $usuarios->EMail= $request->post('EMail');
       $usuarios->Telefono = $request->post('Telefono');
       $usuarios->save();
       return redirect()->route("usuarios.index")->with("success","Usuario Creado Con Exito !!!");
    }

    
    public function show($id)
    {
       //mostrar registro de la tabla
       $usuarios = Usuarios::find($id);        
       return view("eliminar", compact('usuarios'));
       
    }

   
    public function edit($id)
    {
        //Traer los datos a editar y los pone en un formulario
        $usuarios = Usuarios::find($id);        
        return view("actualizar", compact('usuarios'));
        //echo $idUsuario;
    }

   
    public function update(Request $request, $id)
    {
       //Actualiza datos en BD
       $usuarios = Usuarios::find($id);
       $usuarios->id = $request->post('id');
       $usuarios->idTipo_Usuario = $request->post('idTipo_Usuario');
       $usuarios->Nombre = $request->post('Nombre');
       $usuarios->Apellido = $request->post('Apellido');
       $usuarios->EMail= $request->post('EMail');
       $usuarios->Telefono = $request->post('Telefono');
       $usuarios->save();
       return redirect()->route("usuarios.index")->with("success1","Usuario Actualizado Con Exito !!!");
       
    }

   
    public function destroy($id)
    {
       //Elimina un registro
       $usuarios = Usuarios::find($id);
       $usuarios->delete();
       return redirect()->route("usuarios.index")->with("success2","Usuario Eliminado Con Exito !!!");
    }
}
