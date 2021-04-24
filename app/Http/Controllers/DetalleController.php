<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetalleController extends Controller
{
    public function createdetail(int $profileid, string $info, string $price){
        DB::table('detallesdeperfil')->insertGetId([['profileid'=>$profileid],['info'=>$info],['price'=>$price]]);
    }
    public function showdetail(){
        $results = DB::select('select * from detallesdeperfil');
        return $results;
    }
}
