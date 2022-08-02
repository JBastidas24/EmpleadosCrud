@extends('Layouts/plantilla')

@section('tituloPagina' , 'CREAR EMPLEADO')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->

@section('Contenido')
<div class="card">
    <div class="card-header">
        Creacion nuevo empleado
    </div>
    <div class="card-body">
        <a href="{{route('empleados.index')}}" class="btn btn-secondary">
            <span class="fa-solid fa-arrow-left">Volver</span></a>

        <h5 class="text-center">CREAR NUEVO EMPLEADO</h5>
        <p class="card-text">
        <form action="{{route('empleados.store')}}" method="POST">
            <!-- con laravel siempre toca mandar un token-->
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Apellido</label>
            <input type="text" name="apellido" class="form-control" required>
            <label for="">Cedula</label>
            <input type="number" name="cedula" class="form-control" required>
            <label for="">Edad</label>
            <input type="number" name="edad" class="form-control" required>
            <label for="">Cargo</label>
            <select name="cargo" class="form-select" aria-label="Default select example">
                <option selected>SELECCIONE UN CARGO</option>
                <option value="JEFE">JEFE</option>
                <option value="ANALISTA">ANALISTA</option>
                <option value="DESARROLADOR">DESARROLLADOR</option>
                <option value="INGENIERO">INGENIERO</option>
            </select>
            <label for="">Numero Celular</label>
            <input type="number" name="nocelula" class="form-control" required>
            <br>
            <button class="btn btn-success">
                <span class="fa-solid fa-person-circle-plus">Agregar</span>
            </button>
        </form>

        </p>

    </div>
</div>
@endsection