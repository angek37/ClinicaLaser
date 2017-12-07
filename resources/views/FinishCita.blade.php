@extends('layouts.app')
@section('titulo')
Panel de Administración | Completar Cita
@endsection
@section('main-content')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Completar Cita
        </li>
      </ol>
      <span>Paciente:</span>
      <span><strong>{{$cita -> NomPas}} {{$cita -> ApePas}}</strong></span><br>
      <span>Médico:</span>
      <span><strong>{{$cita -> NomMed}} {{$cita -> ApeMed}}</strong></span><br>
      <span>Fecha:</span>
      <span><strong>{{$cita -> fecha}}</strong></span><br>
      <span>Hora:</span>
      <span><strong>{{$cita -> hora}}</strong></span><br><br>
      <form method="POST" action="completeCitaAction">
        <input type="hidden" name="id" value="{{$cita -> id}}">
        <input type="text" name="peso" placeholder="peso" class="form-control" required><br>
        <textarea name="receta" rows="5" class="form-control" required placeholder="Receta"></textarea><br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Finalizar Cita" class="btn btn-info btn-block">
      </form>
@endsection