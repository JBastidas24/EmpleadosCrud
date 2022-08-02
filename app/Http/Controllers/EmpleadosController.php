<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmpleadosController extends Controller
{

    public function index(Request $request)
    {
        $busqueda = trim($request->buscarporcargo);
        $busquedaedad = $request->buscarporedad;
        //$filtroedad = $request->filtroedad;
        
        //echo $busquedaedad;
        //pagina de inicio
        // $datos = Empleados::all();
        $datos = Empleados::nombres($busqueda)
            ->edad($busquedaedad)
            ->paginate(4);
        //  $tabla =DB::table('empleados');




        //   $buscarpor = trim($request->get('buscarpor')); //metodo para obtener lo que viene del formulario o el input llamado o con nombre "texto
        ////  ->select('id','nombre', 'apellido', 'cedula', 'edad', 'cargo','nocelula')
        //->where('cargo','LIKE', '%'.$texto.'%')
        //->orWhere('edad', 'LIKE','%'.$texto.'%');
        return view('inicio', compact('datos'));
    }

    public function menu()
    {
        //pagina de inicio

        return view('menu');
    }
    
    public function horas(Request $request)
    {
        //pagina de inicio
       
        $datos = Empleados::paginate(4);
       // $now = Carbon::now(); funcion para traer la hora
     //   $empleados = Empleados::find($id);
      //  $empleados->hora_actual = $now;
        //$empleados->save();
       // echo $now;
        //$datos->Hora_entrada=$now;
        // en sql se tiene que enviar la fecha como YY-DD-MM 
        return view('horas',compact('datos'));
    }

    public function horasadd(Request $request, $id)
    {
        $now = Carbon::now();
        echo $now;
        $empleados = Empleados::find($id);
        $empleados->Hora_entrada = $now;
        $empleados->save();
        return redirect()->route("empleados.horas")->with("success", "se marco la hora de entrada");

    }
    public function horasSalida(Request $request, $id)
    {
        $now = Carbon::now();
        echo $now;
        $empleados = Empleados::find($id);
        $empleados->Hora_salida = $now;
        $empleados->save();
        return redirect()->route("empleados.horas")->with("success", "se marco la hora de entrada");

    }
    public function updatehora(Request $request, $id){
        $empleados = Empleados::find($id);
        $empleados->nombre = $request->post('nombre');
        $empleados->apellido = $request->post('apellido');
        $empleados->cedula = $request->post('cedula');
        $empleados->edad = $request->post('edad');
        $empleados->cargo = $request->post('cargo');
        $empleados->nocelula = $request->post('nocelula');
        $empleados->Hora_entrada = $request->post('hora_entrada');
        $empleados->Hora_salida = $request->post('hora_salida');
        $empleados->save();
        return redirect()->route("empleados.horas")->with("success", "El registro se actualizo correctamente");

    }

    public function edithora($id){
        //sirve para traer datos a editar y colocarlos en un formulario

        $empleados = Empleados::find($id);
        return view('editarhoras', compact('empleados'));
    }

    public function create()
    {
        //funcion para añadir datos a la tabla
        return view('insertar');
    }

    public function store(Request $request)
    {
        //funcion que guarda datos en la base de datos
        // print_r($_POST); -> para validar que mandara los datos
        $empleados = new Empleados();
        $empleados->nombre = $request->post('nombre');
        $empleados->apellido = $request->post('apellido');
        $empleados->cedula = $request->post('cedula');
        $empleados->edad = $request->post('edad');
        $empleados->cargo = $request->post('cargo');
        $empleados->nocelula = $request->post('nocelula');
        
        $empleados->save();
        return redirect()->route("empleados.index")->with("success", "Se añadio correctamente");
    }


    public function show($id)
    {
        //sirve para obtener un registro de la tabla
        //return view('eliminar');
        $empleados = Empleados::find($id);
        return view('eliminar', compact('empleados'));
    }


    public function edit($id)
    {
        //sirve para traer datos a editar y colocarlos en un formulario

        $empleados = Empleados::find($id);
        return view('actualizar', compact('empleados'));
    }

    public function update(Request $request, $id)
    {
        //sirve para actualizar datos en la bd
        $empleados = Empleados::find($id);
        $empleados->nombre = $request->post('nombre');
        $empleados->apellido = $request->post('apellido');
        $empleados->cedula = $request->post('cedula');
        $empleados->edad = $request->post('edad');
        $empleados->cargo = $request->post('cargo');
        $empleados->nocelula = $request->post('nocelula');
        $empleados->Hora_entrada = $request->post('hora_entrada');
        $empleados->Hora_salida = $request->post('hora_salida');
        $empleados->save();
        return redirect()->route("empleados.index")->with("success", "El registro se actualizo correctamente");
    }


    public function destroy($id)
    {
        //eliminar un registro
        //print_r($id); para validar que me este llegando el id
        $empleados = Empleados::find($id);
        $empleados->delete();
        return redirect()->route("empleados.index")->with("success", "El registro se borro correctamente");
    }
}
