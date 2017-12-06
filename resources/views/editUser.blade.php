@extends('layouts.app')
@section('titulo')
Panel de Administración | Usuarios
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Editar usuario
        </li>
      </ol>
      <form method="POST" action="updateUserAction">
      	<input type="text" name="name" placeholder="Nombre de usuario" class="form-control" value="{{ $usuario->name }}"><br>
      	<input type="password" name="password" placeholder="Contraseña" class="form-control" value="{{ $usuario->password }}" disabled><br>
      	<select name="rol" class="form-control">
			@foreach($roles as $rol)
        @if($rol -> id == $usuario->rol)
        <option value="{{ $rol->id }}" selected>{{ $rol->name }}</option>
        @else
        <option value="{{ $rol->id }}">{{ $rol->name }}</option>
        @endif
			@endforeach
		</select><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Actualizar" class="btn btn-info btn-block">
      </form>
@endsection