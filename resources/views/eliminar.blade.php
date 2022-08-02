@extends('Layouts/plantilla')

@section('tituloPagina' , 'ELIMINAR EMPLEADO')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->

@section('Contenido')
<div class="card">
    <div class="card-header">
        ELIMINAR UN REGISTRO
    </div>
    <div class="card-body">
        <a href="{{route('empleados.index')}}" class="btn btn-secondary">
            <span class="fa-solid fa-arrow-left">Volver</span></a>

        <h5 class="text-center">ELIMINAR EMPLEADO</h5>
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ESTA SEGURO DE ELIMINAR ESTE REGISTRO?
            <table class="table table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Cargo</th>
                    <th>Numero Celular</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $empleados->nombre }}</td>
                        <td>{{ $empleados->apellido }}</td>
                        <td>{{ $empleados->cedula }}</td>
                        <td>{{ $empleados->edad }}</td>
                        <td>{{ $empleados->cargo }}</td>
                        <td>{{ $empleados->nocelula }}</td>
                    </tr>
                </tbody>
            </table>
            <form action="{{ route('empleados.destroy', $empleados->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                    <span class="fa-solid fa-circle-minus">

                        Eliminar</button>
                </span>
            </form>
        </div>

        </p>

    </div>
</div>
@endsection