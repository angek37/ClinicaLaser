@extends('layouts.app')
@section('titulo')
Panel de Administración | Pacientes
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Registrar Paciente
        </li>
      </ol>
      <form method="POST" action="nuevoPaciente">
      	<input type="text" name="first_name" placeholder="Nombre" required class="form-control"><br>
      	<input type="text" name="last_name" placeholder="Apellidos" required class="form-control"><br>
      	<div class="row">
         <div class="col-sm-2">
           Médico Familiar:
         </div>
         <div class="col-sm-10">
           <select name="med_fam" class="form-control">
          @foreach($medicos as $medico)
          <option value="{{ $medico->id }}">{{ $medico->first_name }} {{ $medico->last_name }}</option>
          @endforeach
        </select><br>
         </div>
        </div>
        <input type="text" name="mobilenumber" placeholder="Télefono Celular" required class="form-control"><br>
        <input type="text" name="phonenumber" placeholder="Télefono" required class="form-control"><br>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Registrar" class="btn btn-info btn-block">
      </form><br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lista de pacientes</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Médico Familiar</th>
                  <th>Clave de Acceso</th>
                  <th>Teléfono</th>
                  <th>Celular</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($pacientes as $paciente)
              <tr>
                <td>{{ $paciente->id }}</td>
              	<td>{{ $paciente->first_name }}</td>
              	<td>{{ $paciente->last_name }}</td>
              	<td>{{ $paciente->medNom }} {{ $paciente->medApe }}</td>
                <td>{{ $paciente->password }}</td>
              	<td>{{ $paciente->mobilenumber }}</td>
              	<td>{{ $paciente->phonenumber }}</td>
              	<td> 
              	<button onclick="window.location.href='{{ route('updatePaciente', $paciente->id) }}'" type="button" class="btn btn-labeled btn-info">
                <span class="btn-label"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></button>
            	<button onclick="window.location.href='{{ route('deletePaciente', $paciente->id) }}'" type="button" class="btn btn-labeled btn-danger">
                <span class="btn-label"><i class="fa fa-trash" aria-hidden="true"></i></span></button>
            	</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection