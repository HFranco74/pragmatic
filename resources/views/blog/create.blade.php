@extends('layouts.layout-blog')

@section('content')
<form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="blog-form">
    @csrf
    <div class="container">
        <h2>Crear registro de blog</h2>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Imágen</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-success">Crear Post</button>
    </div>
</form> 
@endsection