<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AusenciaController extends Controller
{
        // Obtener datos
        public function getData(Request $request)
        {
            $rta = 10 + 20;
            return response()->json([
                'status' => '200',
                'message' => 'guardado con exito',
                'result' => $rta,
            ]);
        }
    
        // Guardar datos
        public function save(Request $request)
        {
            return response()->json([
                'status' => '200',
                'message' => 'data guardada con exito',
                'data' => $request-> nombre,
            ]);
        }
    
        // Actualizar datos
        public function update(Request $request)
        {
            return response()->json([
                'status' => '200',
                'message' => 'actualizado con exito',
            ]);
        }
    
        // Eliminar datos
        public function delete(Request $request)
        {
            return response()->json([
                'status' => '200',
                'message' => 'eliminado con exito',
            ]);
        }
}
