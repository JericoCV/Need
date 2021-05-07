<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Models\Usuario as Usuario;
use Illuminate\Support\Facades\Hash as Hash;

class UsuarioController extends Controller
{
    public function createuser(){
       return view("Usuario.crearusuario");
    }
    public function newuser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'dni' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'realname' => 'required',
            'lastname' => 'required'
        ]);
        $request->request->add(['password' =>Hash::make($request->input('password'))]);
        $usuario = new Usuario();
        $usuario->username = $request->username;
        $usuario->password = $request->password;
        $usuario->dni = $request->dni;
        $usuario->adress = $request->adress;
        $usuario->phone = $request->phone;
        $usuario->realname = $request->realname;
        $usuario->lastname = $request->lastname;
        $usuario->save();
        return redirect()->route('showuser',compact('usuario'));
    }
    public function showuser(Usuario $usuario){
        return view("Usuario.mostrarusuario",compact('usuario'));
    }
    public function showusers(){
        $usuarios = Usuario::all();
        return view("Usuario.mostrarusuarios",compact('usuarios'));
    }
    public function edituser(Usuario $usuario){
        return view('Usuario.editarusuario',compact('usuario'));
    }
    public function updateuser(Request $request, Usuario $usuario){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'dni' => 'required',
            'adress' => 'required',
            'phone' => 'required',
            'realname' => 'required',
            'lastname' => 'required'
        ]);
        $request->request->add(['password' =>Hash::make($request->input('password'))]);
        $usuario->username = $request->username;
        $usuario->password = $request->password;
        $usuario->dni = $request->dni;
        $usuario->adress = $request->adress;
        $usuario->phone = $request->phone;
        $usuario->realname = $request->realname;
        $usuario->lastname = $request->lastname;
        $usuario->save();
        return redirect()->route('showuser',compact('usuario'));
    }
    public function destroyuser(Usuario $usuario){
        $usuario->delete();
        return redirect()->route('showusers');
    }
}
