<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformeController extends Controller
{
     // Obtener datos
     public function getData(Request $request)
     {
         $rta = 10 / 2;
         return response()->json([
             'status' => '300',
             'message' => 'guardado con exito',
             'result' => $rta,
         ]);
     }
 
     // Guardar datos
     public function save(Request $request)
     {
         return response()->json([
             'status' => '300',
             'message' => 'data guardada con exito',
             'data' => $request-> color,
         ]);
     }
 
     // Actualizar datos
     public function update(Request $request)
     {
         return response()->json([
             'status' => '300',
             'message' => 'actualizado con exito',
         ]);
     }
 
     // Eliminar datos
     public function delete(Request $request)
     {
         return response()->json([
             'status' => '300',
             'message' => 'eliminado con exito',
         ]);
     }
}
