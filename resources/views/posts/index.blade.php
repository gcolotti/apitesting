@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts  <a class="btn btn-secondary btn-sm" href="{{route('home')}}">Volver</a></div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Título</th>
                                <th>Contenido</th>
                                <th class="text-center">
                                    <a class="btn btn-primary btn-small" href="{{route('post.create')}}">
                                        <strong>+</strong> Nuevo post
                                    </a>
                                </th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td class="text-center">{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-success btn-small" href="{{route('post.edit', $post->id)}}">Editar</a>
                                        <a class="btn btn-danger btn-small" href="{{route('post.delete', $post->id)}}">Eliminar</a>
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
