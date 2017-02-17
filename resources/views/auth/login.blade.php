@extends('template.main')

@section('title','Login') 

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">   
                    {!! Form::open(['route'=>'login','method'=>'POST','class'=>'form-horizontal','role'=>'form']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                    {!!Form::label('email','Email',['class'=>'col-md-4 control-label'])!!}
                        <div class="col-md-6">
                            {!!Form::email('email',null,['class'=>'form-control','required','autofocus','placeholder'=>'example@email.com'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!!Form::label('password','Password',['class'=>'col-md-4 control-label'])!!}
                        <div class="col-md-6">
                            {!!Form::password('password',['class'=>'form-control','required','placeholder'=>'*********'])!!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            {!!Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}  
                            <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                ¿Olvidaste tu contraseña?
                            </a>-->
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection