@extends('layouts.app')
@section('titulo')
Panel de Administración | Médicos
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Editar Médico
        </li>
      </ol>
      <form method="POST" action="updateMedicoAction">
        <input type="hidden" name="id" value="{{ $medico -> id}}">
      	<input type="text" name="first_name" placeholder="Nombre" required class="form-control" value="{{ $medico->first_name }}"><br>
      	<input type="text" name="last_name" placeholder="Apellidos" required class="form-control" value="{{ $medico->last_name }}"><br>
      	<input type="text" name="cedula_prof" placeholder="Cédula profesional" required class="form-control" value="{{ $medico->cedula_prof }}"><br>
      	<input type="text" name="mobilenumber" placeholder="Télefono Celular" required class="form-control" value="{{ $telefono->mobilenumber }}"><br>
      	<input type="text" name="phonenumber" placeholder="Télefono" required class="form-control" value="{{ $telefono->phonenumber }}"><br>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Actualizar" class="btn btn-info btn-block">
      </form><br>
@endsection