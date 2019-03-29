@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Eliminar post</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{route('post.destroy', $post)}}">
                            @csrf
                            @method('delete')

                            <p>Desea realmente eliminar al post: "{{$post->title}}"?</p>

                            <div class="text-center">
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                                <a class="btn btn-secondary"href="{{route('post.index')}}">Cancelar</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
