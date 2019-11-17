<?php

namespace App\Http\Controllers;

use App\colecciones;
use Illuminate\Http\Request;

class ColeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('colecciones.coleNuevas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\colecciones  $colecciones
     * @return \Illuminate\Http\Response
     */
    public function show(colecciones $colecciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\colecciones  $colecciones
     * @return \Illuminate\Http\Response
     */
    public function edit(colecciones $colecciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\colecciones  $colecciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colecciones $colecciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\colecciones  $colecciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(colecciones $colecciones)
    {
        //
    }
}
