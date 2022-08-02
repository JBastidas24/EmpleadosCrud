@extends('Layouts/plantilla')

@section('tituloPagina' , 'CHECK HORA')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->

@section('Contenido')
<a href="{{route('empleados.menu')}}" class="btn btn-secondary">
    <span class="fa-solid fa-arrow-left">Regresar al Menu</span></a>
<br>

<div class="card">
    <div class="card-footer text-center" style="background-color: #2EA6A6;">
        <h5 class="card-title text-center">REGISTRO DE HORAS G-OCHO</h5>
    </div>
    
    <div class="card-body" style="background-color: #D5F2F2;">




        <br>
        

        </ul>
        <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Cargo</th>
                    <th>Hora entrada</th>
                    <th>Hora Salida</th>
                    <th>MARCAR ENTRADA</th>
                    <th>MARCAR SALIDA</th>
                    <th>ACCION</th>

                </thead>


                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->apellido }}</td>
                        <td>{{ $item->cedula }}</td>
                        <td>{{ $item->cargo }}</td>
                        <td>{{ $item->Hora_entrada }}</td>
                        <td>{{ $item->Hora_salida }}</td>

                        <td>
                            <form action="{{ route('empleados.horasadd', $item->id) }}" method="POST">
                                @csrf
                                @method("put")
                                <button class="btn btn-success">
                                    <span class="fa-solid fa-user-clock"> MARCAR ENTRADA</span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('empleados.horasSalida', $item->id) }}" method="POST">
                                @csrf
                                @method("put")
                                <button class="btn btn-warning">
                                    <span class="fa-solid fa-business-time">
                                        MARCAR SALIDA
                                    </span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('empleados.edithora', $item->id) }}" method="GET">

                                <button class="btn btn-info">
                                    <span class="fa-solid fa-file-pen"></span>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        @if ($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
            {{ $mensaje }}

            @endif
    </div>
    
    @endsection