@extends('layout')
@section('title','usuarios')
@section('contenido')
<h4>Editar usuario</h4>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

@if ($errors->any())
@include('alert_error_form')
@endif
<form method="POST" action="{{ url("users/{$user->id}") }}">
    {{ method_field('PUT') }}
    {{ csrf_field()}}
<div class="row">
<div class="col-lg-3">
<div class="form-group">
      <label for="">Nombre</label>
      <input type="text"
        class="form-control" name="name"  placeholder="Nombre completo" value="{{ old('name', $user->name) }}">
    </div>
@if ($errors->has('name'))
    <p style="color:#C83C3C">{{ $errors->first('name') }}</p>
@endif
</div>
<div class="col-lg-3">
<div class="form-group">
      <label for="">Apellido</label>
      <input type="text"
        class="form-control" name="surname"   placeholder="Apellido completo"  value="{{ old('surname', $user->surname) }}">
    </div>
@if ($errors->has('surname'))
    <p style="color:#C83C3C">{{ $errors->first('surname') }}</p>
@endif
</div>
<div class="col-lg-3">
<div class="form-group">
      <label for="">Email</label>
      <input type="email"
        class="form-control" name="email"  placeholder="Email"  value="{{ old('email', $user->email) }}">
    </div>
    <div>
    @if ($errors->has('email'))
    <p style="color:#C83C3C">{{ $errors->first('email') }}</p>
    @endif
    </div>
</div>
    <div class="col-lg-3">
        <div class="form-group">
        <label for="">Password</label>
        <input type="password"
            class="form-control" name="password"   placeholder="Password">
        </div>
        @if ($errors->has('password'))
        <p style="color:#C83C3C">{{ $errors->first('password') }}</p>
        @endif
    </div>
    </div>
    <div class="row">
    <div class="col-lg-3">
    <div class="form-group">
    <label for="">Telefono</label>
    <input type="text"
    class="form-control" name="telephone"   placeholder="Telefono"  value="{{ old('telephone', $user->telephone) }}">
    </div>
    @if ($errors->has('telephone'))
        <p style="color:#C83C3C">{{ $errors->first('telephone') }}</p>
    @endif
</div>
<div class="col-lg-3">
    <div class="form-group">
           <label for="">Profesiones</label>
           <select class="form-control input-sm" name="profession_id">
                @foreach($profession as $item2)
                <option value="{{$item2->ID}}" {{$user->profession_id == $item2->ID  ? 'selected' : ''}}>{{$item2->name}}</option>
                @endforeach
            </select>
        </div>
</div>  
    </div>
    <button type="submit" class="btn btn-sm btn-warning">Editar</button>
    <a  href="{{ url('/users/') }}" class="btn btn-sm btn-danger">Cancelar</a>
</form>
@endsection