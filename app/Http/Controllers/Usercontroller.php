<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profession;

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
    $profession = Profession::orderBy('id','desc')->get();
    return view('users.create',compact('profession'));
    }
    public function delete($id){
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users.index');
    }
    public function store(Request $request){
    $data = request()->validate([
    'name' => ['required','between:3,20'],
    'surname'=>['required','between:3,20'],
    'email' => ['required','email','unique:users,email'],
    'password'=>['required','between:6,14','alpha_num'],
    'telephone'=>['required','digits_between:5,12']
], [
    'name.required' => 'El campo nombre es obligatorio',
    'name.between'=>'El campo nombre debe estar entre 3 y 20 caracteres',
    'surname.required' => 'El campo apellido es obligatorio',
    'surname.between'=>'El campo apellido debe estar entre 3 y 20 caracteres',
    'email.required' => 'El campo email es obligatorio',
    'email.unique' => 'Ya existe un usuario con ese email',
    'telephone.required' => 'El campo telefono es obligatorio',
    'telephone.digits_between' => 'El telefono debe ser numerico y debe estar entre 6 y 14 caracteres',
    'password.required'=>'La contraseña es obligatoria',
    'password.between'=>'El password debe estar entre 6 y 14 caracteres.',
    'password.alpha_num'=>'Solo caracteres alfanumericos'
]);
    User::create($request->all());
    return redirect()->route('users.index'); 
    }
    public function edit($item){
    $user =User::findOrFail($item);
    $profession = Profession::orderBy('id','desc')->get();
    return view('users.edit',compact('user','profession'));
    }
    public function update(User $user){
  $data = request()->validate([
    'name' => ['required','between:3,20'],
    'profession_id'=>['required'],
    'surname'=>['required','between:3,20'],
    'email' => 'required|email|unique:users,email,'.$user->id,
    'password'=>'',
    'telephone'=>['required','digits_between:5,12']
]);
        if ($data['password'] != null) {
         $data['password'] = bcrypt($data['password']);
        } else {
        unset($data['password']);
        }
        $user->update($data);
        return redirect()->route('users.index'); 
    
    }
    //Usuarios con  profesion dos
    public function Listado_Profesion2($id){
    $user=User::where("profession_id","=",2)->orderBy('name', 'ASC')->get();
    return $user;
    }
}
