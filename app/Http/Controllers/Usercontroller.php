<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        return "usuarios";
    }
    public function show($id){
    return "hola tu id es {$id}";
    }
    public function show2($name,$nickname){
    return "hola {$name} tu apodo es {$nickname}";
    }
    public function show3($name,$nickname=null){
    if ($nickname) {
    return "Hola tu nombre es {$name} y tienes apodo y es {$nickname}";
    } else {
    return "Hola tu nombre es {$name} y no tienes apodo";
    }
    }
}
