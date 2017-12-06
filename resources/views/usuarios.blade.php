@extends('layouts.app')
@section('titulo')
Panel de Administración | Usuarios
@endsection
@section('main-content')
     <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Registrar usuario
        </li>
      </ol>
      <form method="POST" action="newUser">
      	<input type="text" required name="name" placeholder="Nombre de usuario" class="form-control"><br>
      	<input type="password" required name="password" placeholder="Contraseña" class="form-control"><br>
      	<select name="rol" class="form-control">
			@foreach($roles as $rol)
			<option value="{{ $rol->id }}">{{ $rol->name }}</option>
			@endforeach
		</select><br>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
      	<input type="submit" value="Registrar" class="btn btn-info btn-block">
      </form>
      <br>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lista de Usuarios</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre de usuario</th>
                  <th>Rol</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $user)
              <tr>
              	<td>{{ $user->usuario }}</td>
              	<td>{{ $user->rol }}</td>
              	<td> 
              	<button onclick="window.location.href='{{ route('updateUser', $user->usuario) }}'" type="button" class="btn btn-labeled btn-info">
                <span class="btn-label"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></button>
            	<button onclick="window.location.href='{{ route('deleteUser', $user->usuario) }}'" type="button" class="btn btn-labeled btn-danger">
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