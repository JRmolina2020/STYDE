<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;

class ProfessionController extends Controller
{
    function index(){
    $profession=Profession::all();
    return $profession;
    }
}
