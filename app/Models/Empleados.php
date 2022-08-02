<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //use HasFactory;
    public function scopeEdad($query, $edad){
        if($edad){
            //echo "if edad";
            return $query->where('edad','=',$edad);
        }
    }
    public function scopeNombres($query, $nombres){
        if($nombres !== 'SELECCIONE UN CARGO'){
           // echo "if cargo".$nombres;
            return $query->where('cargo','LIKE','%'.$nombres.'%');
        }
    }
    public function scopeHora_entrada($query, $hora_entrada){
        if($hora_entrada){
            echo "if horaentrada".$hora_entrada;
            return $query->set('hora_entrada','='.$hora_entrada);
        }
    }

   
}
