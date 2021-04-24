<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{
    public function createservice(string $servicename){
        DB::table('servicio')->insertGetId([['sevicename' => $servicename]]);
    }
    public function showservice(){
        $results = DB::select('select * from servicio');
        return $results;
    }
}
