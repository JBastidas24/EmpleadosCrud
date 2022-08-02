@extends('Layouts/plantilla')

@section('tituloPagina' , 'EDITAR EMPLEADO')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->

@section('Contenido')
<div class="card">
    <div class="card-header">
        EDITAR  EMPLEADO
    </div>
    <div class="card-body">
        
    <a href="{{route('empleados.index')}}" class="btn btn-secondary">
        <span class="fa-solid fa-arrow-left">Volver</span></a>

        <h5 class="text-center"> EDITAR EMPLEADO</h5>
        <p class="card-text">
            <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
                @csrf
                @method("put")
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{ $empleados->nombre }}">
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{ $empleados->apellido }}">
                <label for="">Cedula</label>
                <input type="number" name="cedula" class="form-control" required value="{{ $empleados->cedula }}">
                <label for="">Edad</label>
                <input type="number" name="edad" class="form-control" required value="{{ $empleados->edad }}">
                <label for="">Cargo</label>
                <select name="cargo" class="form-select" aria-label="Default select example">
                <option value="{{ $empleados->cargo }}">{{ $empleados->cargo }}</option>
                <option value="JEFE">JEFE</option>
                <option value="ANALISTA">ANALISTA</option>
                <option value="DESARROLADOR">DESARROLLADOR</option>
                <option value="INGENIERO">INGENIERO</option>
            </select>
          <!--  <label for="">HORA DE ENTRADA</label>
            <input type="DATETIME" name="hora_entrada" class="form-control"  value="{{ $empleados->Hora_entrada }}" >
                <label for="">HORA DE SALIDA</label>
               
               <input type="DATETIME" name="hora_salida" class="form-control"  value="{{ $empleados->Hora_salida }}" > 
               <input type="text" name="cargo" class="form-control" required value="{{ $empleados->cargo }}"> --> 
                <label for="">Numero Celular</label>
                <input type="number" name="nocelula" class="form-control" required value="{{ $empleados->nocelula }}">
                <br>
                <button type="submit" class="btn btn-success"><span class="fa-solid fa-floppy-disk"> EDITAR</span></button>
            </form>
            
        </p>
       
    </div>
</div>
@endsection