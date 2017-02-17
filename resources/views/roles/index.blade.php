@extends('template.main')

@section('title','Lista de Roles') 

@section('content')
<a href="{{route('roles.create')}}" class="btn btn-info">Nuevo rol</a><hr>
<table class="table striped">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td style="display: inline-flex;">
                <a href="{{route('roles.edit',$role->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
                {!! Form::open(['route'=>["roles.destroy",$role->id],'method'=>'DELETE']) !!}
                {!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar este rol?")'])!!}   
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$roles->render()!!}
@endsection