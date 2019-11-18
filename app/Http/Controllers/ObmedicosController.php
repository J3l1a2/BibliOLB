<?php

namespace App\Http\Controllers;

use App\obmedicos;
use Illuminate\Http\Request;

class ObmedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicos=obmedicos::orderBy('id','DESC')->paginate(5);
        return view('biblio.obmedicos', compact('medicos'));
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
     * @param  \App\obmedicos  $obmedicos
     * @return \Illuminate\Http\Response
     */
    public function show(obmedicos $obmedicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\obmedicos  $obmedicos
     * @return \Illuminate\Http\Response
     */
    public function edit(obmedicos $obmedicos)
    {
        //
        $medicos=obmedicos::find('$id');
        return view('obmedicos.form', compact('medicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\obmedicos  $obmedicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obmedicos $obmedicos)
    {
        //
        obmedicos::find('$id')->update($request->all());
        return redirect()->route('obmedicos.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\obmedicos  $obmedicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(obmedicos $obmedicos)
    {
        //
        obmedicos::find('$id')->delete();
        return redirect('/biblio/obmedicos');
    }
}
