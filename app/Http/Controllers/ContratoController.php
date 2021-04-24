<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratoController extends Controller
{
    public function createcontract(int $userid, int $profileid, string $price){
        DB::table('contrato')->insertGetId([['userid'=>$userid],['profileid'=>$profileid],['price'=>$price]]);
    }
    public function showcontract(){
        $results = DB::select('select * from contrato');
        return $results;
    }
}
