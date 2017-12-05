@extends('layouts.app')
@section('titulo')
Panel De administración
@endsection
@section('sidebar')
@endsection
@section('main-content')
     <form action="registroMedico">
     	<input type="text" name="first_name" placeholder="Nombre de Pila"><br>
     	<input type="text" name="last_name" placeholder="apellido"><br>
     	<input type="text" name="ced_prof" placeholder="Cedula profesional"><br>
     	<input type="submit" value="Registrar">
     </form>
@endsection
@section('footer')
@endsection