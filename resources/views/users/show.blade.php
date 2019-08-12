@extends('layout')
@section('contenido')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$user->name}}</h5>
    <p class="card-text">{{$user->email}}</p>
    <p class="card-text">{{$user->profession->name}}</p>
    <a  href="{{ url()->previous() }}" class="btn btn-danger">Atras</a>
  </div>
</div>
@endsection