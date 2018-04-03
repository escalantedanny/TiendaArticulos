@extends('admin.templates.main')

@section('title', 'crear usuario')

@section('content')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

        <div class="form-group col-4">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'nombre de usuario']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('email', 'Correo electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@dominio.com']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
        </div>

        <div class="form-group col-4">
            {!! Form::label('type', 'Tipo: ') !!}
            {!! Form::select('type', ['' => 'Seleccione...', 'member' => 'miembro', 'admin' => 'Administrador'],null,  ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group col-4">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}  
        </div>         
    {!! Form::close() !!}

@endsection
