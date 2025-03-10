@extends('admin.layouts.main')
@section('contenido')
<script>
            function basico(){
                document.getElementById("planEle").innerText="Elige el plan: Basico: $10 mx"
                document.getElementById("plans").value=1
            }
            function premium(){
                document.getElementById("planEle").innerText="Elige el plan: Premium: $20 mx"
                document.getElementById("plans").value=2
            }
            function vip(){
                document.getElementById("planEle").innerText="Elige el plan: VIP: $40 mx"
                document.getElementById("plans").value=3
            }
            
            function enviarInsert(){
            document.getElementById('Finsertar').submit();
            }

        </script> 
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h1 class="mb-0">Crear Usuario</h1></div>
            <div class="col-sm-6"><button type="button" class="btn btn-outline-primary">
            <a href="{{ url('/admin') }}" class="nav-link active">  
            Iniciar Sesion</button></a></div>
            </div>
            </div>
            <!--end::Row-->
            <hr> 
        <form id="Finsertar" action="{{ route('insertUser.post') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="pass" name="password" required><br><br>
            <label for="planEle" id="planEle">Elige el plan:</label>
            <input type="hidden" id="plans" name="plans" value="" required><br><br>
            <button type="button" class="btn btn-outline-secondary" onclick="basico()" >Basico: $10 mx</button>
            <button type="button" class="btn btn-outline-danger" onclick="premium()">Premium: $20 mx</button>
            <button type="button" class="btn btn-outline-warning" onclick="vip()">VIP: $40 mx</button><br><hr>
            <button type="button" class="btn btn-secondary"  onclick="enviarInsert()">Registrarse</button> 
        </form>
        </div>
        
        <!--end::Container-->
    </div>
    <div class="app-content">
    </div>
@endsection