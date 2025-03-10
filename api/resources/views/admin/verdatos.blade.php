@extends('admin.layouts.main')
@section('contenido')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Datos insertados en Base de Datos</h3></div>
            <div  class="col-sm-6"><button type="button" class="btn btn-outline-primary">
            <a href="{{ url('/admin/insert') }}" class="nav-link active">  
            Insertar Datos</button></a></div>
            <div class="col-sm-6">
            </div>
            </div>

    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="col-sm-6"><h3 class="mb-0">Peliculas</h3>
            <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Titulo</td>
                        <td>Slug</td>
                        <td>Tipo de categoria</td>
                        <td>duracion</td>                        
                        <td>Imagen</td>
                        <td>Archivo Media</td>
                        <td>Tipo de Archivo</td>
                        <td>Descripción</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie->id}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->slug}}</td>
                        <td>{{$movie->category_id}}</td>
                        <td>{{$movie->time}}</td>
                        <td>{{$movie->image}}</td>
                        <td>{{$movie->mediaserie}}</td>
                        <td>{{$movie->typefile}}</td>
                        <td>{{$movie->description}}</td>
                        <td>
                        <form action="{{ route('admin.deleteMovie', $movie->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')  <!-- Esto indica que el método HTTP utilizado es DELETE -->
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                        </form>
                        </td>                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="col-sm-6"><h3 class="mb-0">Series</h3>
            <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Titulo</td>
                        <td>Temporadas</td>
                        <td>Slug</td>
                        <td>Tipo de categoria</td>
                        <td>duracion</td>                        
                        <td>Imagen</td>
                        <td>Archivo Media</td>
                        <td>Tipo de Archivo</td>
                        <td>Descripción</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($series as $serie)
                    <tr>
                        <td>{{$serie->id}}</td>
                        <td>{{$serie->title}}</td>
                        <td>{{$serie->seasons}}</td>
                        <td>{{$serie->slug}}</td>
                        <td>{{$serie->category_id}}</td>
                        <td>{{$serie->time}}</td>
                        <td>{{$serie->image}}</td>
                        <td>{{$serie->mediaserie}}</td>
                        <td>{{$serie->typefile}}</td>
                        <td>{{$serie->description}}</td>
                        <td>
                        <button class="btn btn-round"><i class="fa fa-trash"></i></button>
                        </td>                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="col-sm-6"><h3 class="mb-0">Generos</h3>
            <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Slug</td>
                        <td>Descripción</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorys as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                        <button class="btn btn-round"><i class="fa fa-trash"></i></button>
                        </td>                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="col-sm-6"><h3 class="mb-0">Usuarios</h3>
            <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Contraseña</td>
                        <td>Correo</td>
                        <td>Plan Id</td>
                        <td>Termina el Plan</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->plan_id}}</td>
                        <td>{{$user->end_Plan}}</td>
                        <td>
                        <td>
                        <form action="{{ route('admin.eliminarusuario', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                            @method('DELETE')  
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                            <button type="button" class="btn btn-primary" 
                    data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" required><br><br>
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required><br><br>
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" value="{{ old('password', $user->password) }}" required><br><br>
                        </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                        </form>
                        </td>                        
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div> <!--end div usuarios -->
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
            <div class="col-sm-6"><h3 class="mb-0">Planes</h3>
            <table class="table col-12 table-responsive">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nombre del Plan</td>
                        <td>Descripción</td>
                        <td>Precio</td>
                        <td>Tipo de pago</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                    <tr>
                        <td>{{$plan->id}}</td>
                        <td>{{$plan->name_plan}}</td>
                        <td>{{$plan->description}}</td>
                        <td>{{$plan->price}}</td>
                        <td>{{$plan->type_pay}}</td>
                        <td>
                        <button class="btn btn-round"><i class="fa fa-trash"></i></button>
                        </td>                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
            </div>
            <!--end::Row-->
        <!--end::Container-->
    </div>
    <div class="app-content">
        
    </div>
    <script>
        $('#form-id').submit(function(event) {
    // Prevenir el comportamiento predeterminado del formulario
    event.preventDefault();

    var form = $(this);

    // Hacer la solicitud de actualización
    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: form.serialize(),
        success: function(response) {
            // Mostrar un mensaje de éxito o redirigir
            alert('Usuario actualizado correctamente');
            
            // Cerrar el modal después de que el formulario se haya enviado
            $('#exampleModal').modal('hide');
        },
        error: function(xhr, status, error) {
            // Manejar el error si ocurre
            alert('Hubo un error al actualizar el usuario');
        }
    });
});
    </script>
@endsection