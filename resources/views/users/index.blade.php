@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Usuarios</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th class="text-center">
                                    <a class="btn btn-primary btn-small" href="{{route('user.create')}}">
                                        <strong>+</strong> Nuevo usuario
                                    </a>
                                </th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-success btn-small" href="{{route('user.edit', $user->id)}}">Editar</a>
                                        <a class="btn btn-danger btn-small" href="{{route('user.delete', $user->id)}}">Eliminar</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
