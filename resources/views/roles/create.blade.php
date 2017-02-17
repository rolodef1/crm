@extends('template.main')

@section('title','Crear rol')

@section('content')
	{!! Form::open(['route'=>'roles.store']) !!}
	<div class="form-group">
		{!!Form::label('name','Nombre')!!}
		{!!Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre'])!!}
	</div>
	<div class="form-group">
		{!!Form::submit('Crear',['class'=>'btn btn-primary'])!!}			
	</div>
	{!! Form::close() !!}
@endsection