@extends('layout')
@section('title','usuarios')
@section('contenido')
<h4>Crear usuarios</h4>
@if ($errors->any())
@include('alert_error_form')
@endif
<form method="POST" action="{{ url('users/') }}">
    {{ csrf_field() }}
    <div class="row">
<div class="col-lg-3">
<div class="form-group">
      <label for="">Nombre</label>
      <input type="text"
        class="form-control" name="name" id=""  placeholder="Nombre completo">
    </div>
@if ($errors->has('name'))
    <p style="color:#C83C3C">{{ $errors->first('name') }}</p>
@endif
</div>
<div class="col-lg-3">
<div class="form-group">
      <label for="">Nombre</label>
      <input type="email"
        class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}">
    </div>
    <div>
    @if ($errors->has('email'))
    <p style="color:#C83C3C">{{ $errors->first('email') }}</p>
    @endif
    </div>
</div>
<div class="col-lg-3">
<div class="form-group">
      <label for="">Nombre</label>
      <input type="password"
        class="form-control" name="password"   placeholder="Password">
    </div>
    @if ($errors->has('password'))
    <p style="color:#C83C3C">{{ $errors->first('password') }}</p>
    @endif
</div>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
    <a  href="{{ url('/users/') }}" class="btn btn-sm btn-danger">Cancelar</a>
</form>
@endsection