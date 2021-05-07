<?php

namespace App\Http\Controllers;
use App\Models\Servicio as Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function createservice(){
        return view("Servicio.crearservicio");
    }
    public function showservices(){
        $servicios = Servicio::all();
        return view("Servicio.mostrarservicios",compact('servicios'));
    }
    public function showservice(Servicio $servicio){
        return view("Servicio.mostrarservicio",compact('servicio'));
    }
    public  function saveservice(Request $request){
        $servicio = new Servicio();
        $servicio->servicename = $request->servicename;
        $servicio->save();
        return redirect()->route('showservice',$servicio);
    }
    public function editservice(Servicio $servicio){
        return view("Servicio.editarservicio", compact('servicio'));
    }
    public function updateservice(Request $request,Servicio $servicio){
        $servicio->servicename = $request->servicename;
        $servicio->save();
        return redirect()->route('showservice',$servicio);
    }
}
