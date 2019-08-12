<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Usercontroller extends Controller
{
    public function index(){
    $users = User::orderBy('id','desc')->get();
    return view('users.index',compact('users'));
    }
    public function show($id){
    $user =User::findOrFail($id);
    return view('users.show',compact('user'));
    }
    public function create(){
    return view('users.create');
    }
    public function delete($id){
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users.index');
    }
    public function store(){
    $data = request()->validate([
    'name' => ['required'],
    'email' => ['required','email','unique:users,email'],
    'password'=>['required','between:6,14','alpha_num']
], [
    'name.required' => 'El campo nombre es obligatorio',
    'email.required' => 'El campo email es obligatorio',
    'email.unique' => 'Ya existe un usuario con ese email',
    'password.required'=>'La contraseña es obligatoria',
    'password.between'=>'El password debe estar entre 6 y 14 caracteres.',
    'password.alpha_num'=>'Solo caracteres alfanumericos'
]);
     User::create([
            'name' => request('name'),
            'email' => request()->email,
            'password' => bcrypt(request()->get('password')),
            'profession_id' =>2
        ]);
    return redirect('/users/');
    }

    
    //Usuarios con  profesion dos
    public function Listado_Profesion2($id){
    $user=User::where("profession_id","=",2)->orderBy('name', 'ASC')->get();
    return $user;
    }
}
