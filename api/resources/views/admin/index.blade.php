@extends('admin.layouts.main')

@section('contenido')
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h1 class="mb-0">Iniciar Sesión</h1></div>
              <div  class="col-sm-6"><button type="button" class="btn btn-outline-primary">
              <a href="{{ url('/admin/crearusuario') }}" class="nav-link active">  
              Crear Usuario</button></a></div><hr>
            </div>
            <!--end::Row-->
        <div class="col-sm-6">
          <h5 class="mb-0"> Nombre de Usuario:</h5>
          <input type="text" id="user" placeholder="Username" required> 
          <h5 class="mb-0"> Contraseña:</h5>
          <input type="password" id="password" placeholder="password" required><br><hr>
          <button type="button" class="btn btn-secondary">Iniciar Sesion</button> 
        </div>
      <br>
        </div class="col-sm-12">
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
        </div>
        
        <!--end::App Content Header-->
        <!--begin::App Content-->
        
@endsection