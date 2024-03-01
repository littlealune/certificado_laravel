<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;
use Illuminate\Support\Facades\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(10);
        $page = Request::get('page') ?? 1;

//         return view("alumnos.listado",["alumnos"=> $alumnos, "page"=>$page]);

        return view("alumnos.listado",compact("alumnos", "page"));


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("alumnos.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $valores =  $request->input();
        $alumno = new Alumno($valores);
        $alumno->save();
        $alumnos = Alumno::all();
        return view ("alumnos.listado",["alumnos"=>$alumnos]);


    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $page = Request::get("page");

        return view("alumnos.edit",["alumno"=>$alumno,"page"=>$page]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {

        $page = Request::get("page");

        $valores =  $request->input();

        $alumno->update($valores);

        return response()->redirectTo(route("alumnos.index",["page"=>$page]));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::paginate(10);
        return view ("alumnos.listado",["alumnos"=>$alumnos]);

    }

    /*
        let elements = document.querySelectorAll('.options');
        elements.forEach((element) => {
            element.addEventListener('click', accionAEjecutar())
        //lo que falte
        }
    */
}


