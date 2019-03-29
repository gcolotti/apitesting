@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear post nuevo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('post.store') }}">
                            @csrf

                            @include('posts.partials.create-edit-form')

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Crear post
                                    </button>
                                    <a class="btn btn-secondary"href="{{route('user.index')}}">Cancelar</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
