@extends('Layouts/plantilla')

@section('tituloPagina' , 'EMPLEADOS')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->

@section('Contenido')

<br><br>
<a href="{{route('empleados.menu')}}" class="btn btn-secondary">
    <span class="fa-solid fa-arrow-left">Regresar al Menu</span></a>
<div class="card text-center" style="background-color: #D5F2F2;">

    <div class="card-header" style="background-color: #2EA6A6;">
        EMPLEADOS G8
    </div>

    <div class="card-body">

        <h5 class="card-title">LISTADO DE EMPLEADOS</h5>
        <form class="d-flex" action="{{ route('empleados.index') }}" method="GET">
        <input  name="buscarporedad" class="form-control me-2" type="search" placeholder="Buscar por edad" aria-label="Search">
      
       <!-- <input  name="buscarporcargo" class="form-control me-2" type="search" placeholder="Buscar por cargo" aria-label="Search"> -->
        <select name="buscarporcargo" class="form-select" aria-label="Default select example">
                <option selected>SELECCIONE UN CARGO</option>
                <option value="JEFE">JEFE</option>
                <option value="ANALISTA">ANALISTA</option>
                <option value="DESARROLADOR">DESARROLLADOR</option>
                <option value="INGENIERO">INGENIERO</option>
            </select>
            <button class="btn btn-outline-success" type="submit"><span  class="fa-solid fa-magnifying-glass"></span></button>
            <a class="btn btn-outline-danger" href="{{ route('empleados.index') }}"><span class="fa-solid fa-filter-circle-xmark"></span></a>
        </form>
        <br>

        @if ($mensaje = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $mensaje }}

            @endif
        </div>
        <p>
            <a href="{{route('empleados.create')}}" class="btn btn-info">
                <span class="fa-solid fa-user-plus"></span>Agregar Empleado</a>
            <br>
        </p>
        <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Cargo</th>
                    <th>Numero Celular</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </thead>


                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->cedula }}</td>
                        <td>{{ $item->edad }}</td>
                        <td>{{ $item->cargo }}</td>
                        <td>{{ $item->nocelula }}</td>
                        <td>
                            <form action="{{ route('empleados.edit', $item->id) }}" method="GET">

                                <button class="btn btn-warning">
                                    <span class="fa-solid fa-file-pen"></span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('empleados.show', $item->id) }}" method="GET">
                                <button class="btn btn-danger">

                                    <span class="fa-solid fa-trash">

                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
             
            </table>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                {{$datos->links()}}
                </div>
            </div>
        </div>
        </p>

    </div>
    <div class="card-footer text-muted">
        "Mantenerse juntos, es el progreso"
    </div>
</div>
</div>


@endsection