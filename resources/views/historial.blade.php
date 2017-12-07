@extends('layouts.app')
@section('titulo')
Panel de Administración | Historial de {{$paciente -> first_name }} {{$paciente -> last_name }}
@endsection
@section('main-content')
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Historial de {{$paciente -> first_name }} {{$paciente -> last_name }}</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Peso (KG)</th>
                  <th>Receta</th>
                </tr>
              </thead>
              <tbody>
              @foreach($historiales as $historial)
              <tr>
                <td>{{$historial -> fecha}}</td>
                <td>{{$historial -> peso}}</td>
                <td>{{$historial -> receta}}</td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection