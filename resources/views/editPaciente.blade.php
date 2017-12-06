@extends('layouts.app')
@section('titulo')
Panel de Administración | Editar paciente
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Editar Paciente
        </li>
      </ol>
      <form method="POST" action="updatePacienteAction">
        <input type="text" name="id" hidden value="{{$paciente -> id}}">
        <input type="text" name="telefono" hidden value="{{$paciente -> telefono}}">
      	<input type="text" name="first_name" placeholder="Nombre" required class="form-control" value="{{$paciente -> first_name}}"><br>
      	<input type="text" name="last_name" placeholder="Apellidos" required class="form-control" value="{{$paciente -> last_name}}"><br>
      	<div class="row">
         <div class="col-sm-2">
           Médico Familiar:
         </div>
         <div class="col-sm-10">
           <select name="med_fam" class="form-control">
          @foreach($medicos as $medico)
            @if($medico -> id == $paciente -> med_fam)
              <option value="{{ $medico->id }}" selected>{{ $medico->first_name }} {{ $medico->last_name }}</option>
            @else
              <option value="{{ $medico->id }}">{{ $medico->first_name }} {{ $medico->last_name }}</option>
            @endif
          @endforeach
        </select><br>
         </div>
        </div>
        <input type="text" name="mobilenumber" placeholder="Télefono Celular" required class="form-control" value="{{$mobilenumber}}"><br>
        <input type="text" name="phonenumber" placeholder="Télefono" required class="form-control" value="{{$phonenumber}}"><br>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Actualizar" class="btn btn-info btn-block">
      </form><br>
@endsection