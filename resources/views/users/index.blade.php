@extends('layout')
@section('title','usuarios')
@section('contenido')
<a href="{{ route('users.create')}}" role="button" class="btn btn-sm btn-success">Registrar</a>
<br><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estado</th>
      <th scope="col">Profesion</th>
      <th scope="col">Acciones</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@forelse ($users as $item)
    <tr>
      <th scope="row">{{$item->name}}</th>
      <th scope="row">{{$item->surname}}</th>
      <td>{{$item->email}}</td>
      <td>{{$item->telephone}}</td>
      <td>
      @if ($item->is_active)
      <span class="badge badge-success">activo</span>
      @else
      <span class="badge badge-danger">inactivo</span>
      @endif
      </td>
      <td>{{$item->profession->name}}</td>
      <td><a href="{{ route('users.show',$item)}}" role="button" 
      class="btn btn-sm btn-primary"><i class="far fa-eye"></i></a>
      <a href="{{ route('users.edit',$item)}}" role="button" 
      class="btn btn-sm btn-warning"><i class="fa fa-eyedropper"></i></a>
  </td>
  <td><form action="{{ route('users.delete', $item) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
     <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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


   
