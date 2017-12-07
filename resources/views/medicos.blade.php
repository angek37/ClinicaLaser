@extends('layouts.app')
@section('titulo')
Panel de Administración | Médicos
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Registrar Médico
        </li>
      </ol>
      <form method="POST" action="nuevoMedico">
      	<input type="text" name="first_name" placeholder="Nombre" required class="form-control"><br>
      	<input type="text" name="last_name" placeholder="Apellidos" required class="form-control"><br>
      	<input type="text" name="cedula_prof" placeholder="Cédula profesional" maxlength="7" required class="form-control"><br>
      	<input type="text" name="mobilenumber" placeholder="Télefono Celular" maxlength="10" required class="form-control"><br>
      	<input type="text" name="phonenumber" placeholder="Télefono" required maxlength="7" class="form-control"><br>
      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Registrar" class="btn btn-info btn-block">
      </form><br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lista de Médicos</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Cédula Profesional</th>
                  <th>Celular</th>
                  <th>Teléfono</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($medicos as $medico)
              <tr>
              	<td>{{ $medico->first_name }}</td>
              	<td>{{ $medico->last_name }}</td>
              	<td>{{ $medico->cedula_prof }}</td>
              	<td>{{ $medico->mobilenumber }}</td>
              	<td>{{ $medico->phonenumber }}</td>
              	<td> 
              	<button onclick="window.location.href='{{ route('updateMedico', $medico->id) }}'" type="button" class="btn btn-labeled btn-info">
                <span class="btn-label"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></button>
            	<button onclick="window.location.href='{{ route('deleteMedico', $medico->id) }}'" type="button" class="btn btn-labeled btn-danger">
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