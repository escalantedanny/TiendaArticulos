@extends('admin.templates.main')

@section('title', 'Lista de usuario')

@section('content')

    <a href="{{ route('users.create') }}" class="btn btn-info" >Registrar Nuevo usuario</a>
    <hr>
    <table class="table table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>TIPO</th>
            <th>ACCION</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td> {{ $user->id }}</td>
                    <td> {{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td align="center">
                        @if($user->type !=   'admin')
                            <span class="badge badge-secondary">{{ $user->type }}</span>
                        @else
                            <span class="badge badge-primary">{{ $user->type }}</span>
                        @endif
                    </td>
                    <td align="center">
                        <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></a> 
                        <a href="#" class="btn btn-warning">del</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@endsection
