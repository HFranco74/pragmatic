@extends('layouts.layout-blog')

@section('content')
<form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data" class="blog-form">
    @csrf
    <div class="container">
        <h2>Crear post</h2>
        <div class="form-group">
            <label for "categoria">Categoría</label>
            <select class="form-control" id="categoria" name="categoria_id" required>
                <option value="" disabled selected>Seleccione una categoría</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="image">Imágen</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </div>
</form> 
@endsection