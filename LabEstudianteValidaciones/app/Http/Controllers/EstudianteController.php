<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //obtener los datos de la base de datos
        $data['estudiantes']=Estudiante::paginate(10);
        return view('estudiante.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insertar los datos del formulario a la vista
        $estudianteData = request()->except('_token');
        Estudiante::insert($estudianteData);
        return redirect('estudiantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Se muestra el formulario del estudiante
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Se actualiza el registro
        $estudianteData = request()->except(['_token','_method']);
        Estudiante::where('id', '=', $id)->update($estudianteData);
        return redirect('estudiantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //agregamos funcion para eliminar registro
        Estudiante::destroy($id);
        return redirect('estudiantes');
    }
}
