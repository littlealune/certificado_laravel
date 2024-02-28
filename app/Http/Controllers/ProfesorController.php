<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores = Profesor::all();

        return view("profesores.listado",["profesores"=> $profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("profesores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $valores =  $request->input();
        $profesor = new Profesor($valores);
        $profesor->save();
        $profesores = Profesor::all();
        session()->flash('session',"Profesor creado correctamente");
        return view ("profesores.listado",["profesores"=>$profesores]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view("profesores.editar",["profesor"=>$profesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        $valores =  $request->input();
        $profesor->update($valores);
        $profesores = Profesor::all();
        return view ("profesores.listado",["profesores"=>$profesores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        $profesores = Profesor::all();
        session()->flash('session',"Profesor eliminado correctamente");
        return view ("profesores.listado",["profesores"=>$profesores]);
    }
}
