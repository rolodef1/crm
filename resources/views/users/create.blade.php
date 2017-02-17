@extends('template.main')

@section('title','Crear usuario')

@section('content')
	{!! Form::open(['route'=>'users.store']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','Correo electronico')!!}
			{!!Form::email('email',null,['class'=>'form-control','required','placeholder'=>'example@email.com'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('password','Contraseña')!!}
			{!!Form::password('password',['class'=>'form-control','required','placeholder'=>'*********'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('status','Estado')!!}
			{!!Form::select('status',[''=>'Seleccione un estado','Habilitado'=>'Habilitado','Inhabilitado'=>'Inhabilitado'], null ,['class'=>'form-control','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('role_id','Rol')!!}
			{!!Form::select('role_id',$roles, null ,['class'=>'form-control','required','placeholder'=>'Seleccione un rol...'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection