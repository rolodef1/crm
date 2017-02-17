@extends('template.main')

@section('title','Editar rol')

@section('content')
	{!! Form::open(['route'=>["roles.update",$role->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',$role->name,['class'=>'form-control','required','placeholder'=>'Nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection