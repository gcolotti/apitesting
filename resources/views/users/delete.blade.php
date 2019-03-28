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

                        <form method="POST" action="{{route('user.destroy', $user)}}">
                            @csrf
                            @method('delete')

                            <p>Desea realmente eliminar al usuario {{$user->name}}?</p>

                            <div class="text-center">
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                                <a class="btn btn-secondary"href="{{route('user.index')}}">Cancelar</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
