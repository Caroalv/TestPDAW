<?php

namespace App\Http\Controllers;
use App\Models\Task;


use Illuminate\Http\Request;

class GraficasController extends Controller
{
    //
    public function index()
{
    return view('graficas');
}

public function showGraph() {
    $tasks = Task::all(); // Obtén las tareas desde tu modelo de Eloquent
    return view('graficas', ['tasks' => $tasks]);
}


}
