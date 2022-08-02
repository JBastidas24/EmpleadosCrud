@extends('Layouts/plantilla')

@section('tituloPagina' , 'MENU G8')
@section('Contenido')
<!-- Titulo de la pagina , se llama desde la vista inicio  -->
<BR></BR>
<div class="card">
    <div class="card-footer text-center" style="background-color: #2EA6A6;">
        MENU EMPLEADOS G8
    </div>
    <div class="card-body" style="background-color: #D5F2F2;">
        <h5 class="card-title text-center">BIENVENIDO AL GRUPO G8</h5>
        <p class="card-text text-center">Dentro del siguiente contenido podras encontrar unos botones los cuales te podran llevar a ver el listado
            de empleados , relizar el chek in o chek out.
        </p>

        <ul class="nav nav-pills nav-fill" >
            <li class="nav-item">
                <a class="btn btn-info" aria-current="page" href="{{  route('empleados.index')}} "> 
                    <span class="fa-solid fa-people-group"> EMPLEADOS </span> </a>
            </li>
            
          
      
        <br>
        
        
            <li class="nav-item">
                <a class="btn btn-info" aria-current="page" href="{{ route('empleados.horas') }}">
                <span class="fa-solid fa-clock"> REGISTRO ENTRADA/SALIDA </span> </a>
                  
            </li>
        </ul>
    </div>
    
</div>
<br>
<div class="card" style="background-color: #2EA6A6; color:black;">
    <div class="card-header">
        Acerca de G-OCHO S.A.S
    </div>
    <div class="card-body" style="background-color: #D5F2F2;">
        <blockquote class="blockquote mb-0">
            <p>Somos una compañía comprometida con el bienestar de las personas. Prestamos servicios de cuidado en salud, fortalecidos con las tecnologías de la información y las comunicaciones para brindar un acompañamiento oportuno y constante al paciente. En armonía con nuestra misión, ofrecemos servicios de gestión del talento humano, asesorías jurídicas, operación clínica, y un contact center con tres líneas de atención. Todo lo mencionado nos convierte en una compañía integral y en un aliado estratégico del sector. </p>
            <a href="https://www.ospedale.com.co/g-ocho-inicio/" class="btn btn-info">Visitar Pagina Oficial</a>
        </blockquote>
    </div>
</div>
@endsection