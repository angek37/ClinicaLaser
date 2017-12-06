@extends('layouts.app')
@section('titulo')
Panel de Administración | Citas
@endsection
@section('main-content')
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lista de Citas</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Paciente</th>
                  <th>Médico</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Comentarios</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($citas as $cita)
              <tr>
              	<td>{{ $cita->PasNom }} {{$cita->PasApe}}</td>
              	<td>{{ $cita->MedNom }} {{$cita->MedNom}}</td>
                <td>{{$cita->fecha}}</td>
                <td>{{$cita->hora}}</td>
                <td>{{$cita->detalles}}</td>
              	<td> 
              	<button onclick="window.location.href='{{ route('completeCita', $cita->id) }}'" type="button" class="btn btn-labeled btn-info">
                <span class="btn-label"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></button>
            	<button onclick="window.location.href='{{ route('cancelCita', $cita->id) }}'" type="button" class="btn btn-labeled btn-danger">
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