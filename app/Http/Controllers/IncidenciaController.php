<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Sacamos todas las incidencias de la BD
        $incidencias = Incidencia::paginate(10);
        //Pasamos las incidencias a una vista llamada 'incidencias'
        return view('incidencias', ['incidencias' => $incidencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nuevaIncidencia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $incidencia = new Incidencia;
        $incidencia->latitud = $request->latitud;
        $incidencia->longitud = $request->longitud;
        $incidencia->ciudad = $request->ciudad;
        $incidencia->direccion = $request->direccion;
        $incidencia->etiqueta = $request->etiqueta;
        $incidencia->estado = $request->estado;
        $incidencia->descripcion = $request->descripcion;
        $incidencia->save();

        return redirect()->route('incidencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(Incidencia $incidencia)
    {
        return view('incidenciaDetalle', ['inc' => $incidencia]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Incidencia $incidencia)
    {
        return view('modifIncidencia', ['inc' => $incidencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia->latitud = $request->latitud;
        $incidencia->longitud = $request->longitud;
        $incidencia->ciudad = $request->ciudad;
        $incidencia->direccion = $request->direccion;
        $incidencia->etiqueta = $request->etiqueta;
        $incidencia->estado = $request->estado;
        $incidencia->descripcion = $request->descripcion;
        $incidencia->save();

        return view('incidenciaDetalle', ['inc' => $incidencia]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();
        return redirect()->route('incidencias.index');
        //return redirect()->action([IncidenciaController::class, 'index']);
    }


    public function busqueda(Request $request) {
        $incidencias = Incidencia::where('ciudad', $request->texto)
                                ->orwhere('direccion','like','%'.$request->texto.'%')
                                ->orwhere('descripcion','like','%'.$request->texto.'%')
                                ->paginate(10);

        return view('incidencias', ['incidencias' => $incidencias]);

    }

}
