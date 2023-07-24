<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function index(Request $request)
    {
        $tareas = Tarea::all();

        return view("tareas.index", [
            "tareas" => $tareas
        ]);
    }

    public function create(Request $request)
    {
        return view("tareas.create");
    }

    public function store(Request $request)
    {
        $descripcion = $request->input("descripcion");

        Tarea::create([
            "descripcion" => $descripcion
        ]);

        return redirect()->route("tareas.index");
    }
}
