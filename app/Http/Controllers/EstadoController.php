<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadoController extends Controller
{
    public function createstate(int $userid, int $profileid, int $calification, string $commentary){
        DB::table('estado')->insertGetId([['userid'=>$userid],['profileid'=>$profileid],['calification'=>$calification],['commentary'=>$commentary]]);
    }
    public function showstate(){
        $results = DB::select('select * from estado');
        return $results;
    }
}
