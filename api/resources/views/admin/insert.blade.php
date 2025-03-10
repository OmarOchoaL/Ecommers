@extends('admin.layouts.main')
@section('contenido')
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Insertar Peliculas, Series y Generos</h3></div>
            <div  class="col-sm-6"><button type="button" class="btn btn-outline-primary">
            <a href="{{ url('/admin/verdatos') }}" class="nav-link active">  
            Ver Datos</button></a></div>
            <div class="col-sm-6">
            </div>
            </div>
            <!--end::Row-->
            @if ($mensaje=Session::get('success'))
        <div id="success-message" class="alert alert-success" role="alert">
            {{$mensaje}}
        </div>
        <script>
        setTimeout(function() {
            var message = document.getElementById("success-message");
            if (message) {
                message.style.display = "none";  
            } }, 5000);  
        </script>
        @endif
    <hr>
    <h4>Insertar Pelicula</h4>
    <form action="{{ route('insertPeli.post') }}" method="POST">
    @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="slug">Slug:</label>
        <input type="text" id="slug" name="slug" required><br><br>
        <label for="genero">Genero:</label>
        <input type="text" id="category" name="category" required><br><br>
        <label for="tiempo">Duración:</label>
        <input type="text" id="time" name="time" required><br><br>
        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>
        <label for="movie">Selecciona un archivo de video:</label>
        <input type="file" name="movie" id="movie" accept="video/*" required><br><br>
        <label for="color">Tipo de archivo:</label>
        <select name="typefile" id="typefile">
        <option value="mp4">Mp4</option>
        <option value="mkv">MKV</option>
        <option value="mp3">Mp3</option>
        <option value="3gp">3GP</option>
        <option value="avi">AVI</option>
        </select><br><br>
        <label for="tiempo">Descripción:</label><br>
        <textarea name="descrip" id="descrip" rows="6" cols="50" maxlength="200" placeholder="Descripción de la pelicula..."></textarea><br><br>
        <input type="submit" value="Registrar">
    </form>
    <hr>
    <h4>Insertar Serie</h4>
    <form action="#" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="no" name="nombre" required><br><br>
        <label for="genero">Temporadas:</label>
        <input type="number" id="seas" name="seasons" required><br><br>
        <label for="slug">Slug:</label>
        <input type="text" id="sl" name="slug" required><br><br>
        <label for="genero">Genero:</label>
        <input type="text" id="cate" name="category" required><br><br>
        <label for="tiempo">Duración:</label>
        <input type="text" id="tim" name="time" required><br><br>
        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" name="imagen" id="imagen" accept="image/*" required><br><br>
        <label for="serie">Selecciona un archivo de video:</label>
        <input type="file" name="serie" id="ser" accept="video/*" required><br><br>
        <label for="color">Tipo de archivo:</label>
        <select name="typefile" id="tf">
        <option value="mp4">Mp4</option>
        <option value="mkv">MKV</option>
        <option value="mp3">Mp3</option>
        <option value="3gp">3GP</option>
        <option value="avi">AVI</option>
        </select><br><br>
        <label for="tiempo">Descripción:</label><br>
        <textarea name="descrip ser" id="desserie" rows="6" cols="50" maxlength="200" placeholder="Descripción de la serie..."></textarea><br><br>
        <input type="submit" value="Registrar">
    </form><hr>
    <h4>Insertar Genero</h4>
    <form action="{{ route('insertarGenero.post') }}" method="POST">
    @csrf
        <label for="nombre">Nombre genero:</label><br>
        <input type="text" id="genero" name="genero" required><br><br>
        <label for="nombre">Slug:</label><br>
        <input type="text" id="slug" name="slug" required><br><br>
        <label for="tiempo">Descripción:</label><br>
        <textarea name="descrip" id="descrip" rows="6" cols="50" maxlength="200" placeholder="Descripción del genero..."></textarea><br><br>
        <input type="submit" value="Registrar">
    </form>
        </div>
        
        <!--end::Container-->

    </div>
    <div class="app-content">
        
    </div>
@endsection