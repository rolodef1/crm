@extends('template.main')

@section('title','Lista de Usuarios') 

@section('content')
<a href="{{route('users.create')}}" class="btn btn-info">Nuevo usuario</a><hr>
<table class="table striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Estado</th>
        <th>Role</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->status}}</td>
            <td><span class="label label-primary">{{$user->role_id}}</span></td>
            <td style="display: inline-flex;">
                <a href="{{route('users.edit',$user->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
                {!! Form::open(['route'=>["users.destroy",$user->id],'method'=>'DELETE']) !!}
                {!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar este usuario?")'])!!}   
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$users->render()!!}
@endsection