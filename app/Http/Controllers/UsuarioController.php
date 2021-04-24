<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function createuser(string $username, string $userpassword, string $dni, string $adress, string $phone, string $realname,string $lastname){
        DB::table('usuario')->insertGetId([['username'=>$username],['userpassword'=>$userpassword],['dni'=>$dni],['adress'=>$adress],['phone'=>$phone],['realname'=>$realname],['lastname'=>$lastname]]);
    }
    public function showuser(){
        $results = DB::select('select * from usuario');
        return $results;
    }
}
