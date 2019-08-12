@extends('layout')
@section('title','usuarios')
@section('contenido')
<a href="{{ route('users.create')}}" role="button" class="btn btn-sm btn-success">Registrar</a>
<br><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Profesion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
@forelse ($users as $item)
    <tr>
      <th scope="row">{{$item->name}}</th>
      <td>{{$item->email}}</td>
      <td>{{$item->profession->name}}</td>
     
      <td><a href="{{ route('users.show',$item)}}" role="button" class="btn btn-sm btn-success">Ver</a>
      <button type="button" class="btn btn-sm btn-warning">Editar</button></<button>
        <form action="{{ route('users.delete', $item) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
</form>
      </td>
    </tr>
@empty
<div class="alert alert-danger" role="alert">
  No hay usuarios <strong>Registrados</strong>
</div>
@endforelse
  </tbody>
</table>
@endsection
@section('sidebar')
@parent
<h1>BARRA LATERAL</h1>
@endsection


   
