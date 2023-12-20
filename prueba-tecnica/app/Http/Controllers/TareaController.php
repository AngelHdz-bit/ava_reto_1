<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Database\QueryException;
class TareaController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'titulo' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'completada' => 'required|string',
            ]);
            $tarea = new Tarea($request->all());
            $tarea->save();
            return response()->json(['message' => 'Tarea creada correctamente'], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Error al crear la tarea: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error inesperado al crear la tarea: ' . $e->getMessage()], 500);
        }
    }

    public function show()
    {
        try {
            $tareas = Tarea::all();
            return response()->json($tareas, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al obtener las tareas: ' . $e->getMessage()], 500);
        }
    }


}