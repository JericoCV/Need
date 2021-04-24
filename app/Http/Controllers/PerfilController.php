<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function createprofile(string $profession, int $userid, int $servicegroup, string $ruc, string $workplace){
        DB::table('perfil')->insertGetId([['profession'=>$profession],['userid'=>$userid],['servicegroup'=>$servicegroup],['ruc'=>$ruc],['workplace'=>$workplace]]);
    }
    public function showprofile(){
        $results = DB::select('select * from perfil');
        return $results;
    }
}
