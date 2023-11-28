<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//LLAMADA AL MODELO DE MI BASE LLAMADO TASK
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $task= Task::all();
            return view('tasks.index',compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto = new Task();
        $producto->titulo = $request->titulo;
        $producto->descripcion = $request->descripcion;
        $producto->estado = $request->estado;
        $producto->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $task = Task::find($id);
        return view('tasks.index', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

     $tareas = Task::find($request->id);
        $tareas->titulo = $request->titulo;
        $tareas->descripcion = $request->descripcion;
        $tareas->estado = $request->estado;
        $tareas->save();
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Tarea Eliminada');
   
}
}