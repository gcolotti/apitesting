<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">Título</label>

    <div class="col-md-6">
        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{isset($post)? $post->title : old('title') }}" required autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="content" class="col-md-4 col-form-label text-md-right">Contenido</label>

    <div class="col-md-6">
        <input id="content" type="text" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" value="{{isset($post)? $post->content : old('content') }}" required>

        @if ($errors->has('content'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('content') }}</strong>
            </span>
        @endif
    </div>
</div>
