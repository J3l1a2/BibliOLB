<?php

namespace App\Http\Controllers;

use App\fotografias;
use Illuminate\Http\Request;

class FotografiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fotografia=fotografias::orderBy('id','DESC')->paginate(5);
        return view('biblio.fotografias', compact('fotografia'));
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
     * @param  \App\fotografias  $fotografias
     * @return \Illuminate\Http\Response
     */
    public function show(fotografias $fotografias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fotografias  $fotografias
     * @return \Illuminate\Http\Response
     */
    public function edit(fotografias $fotografias)
    {
        //
        $fotografia=fotografias::find('$id');
        return view('fotografias.form', compact('fotografia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fotografias  $fotografias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fotografias $fotografias)
    {
        //
        fotografias::find('$id')->update($request->all());
        return redirect()->route('fotografias.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fotografias  $fotografias
     * @return \Illuminate\Http\Response
     */
    public function destroy(fotografias $fotografias)
    {
        //
        fotografias::find('$id')->delete();
        return redirect('/biblio/fotografias');
    }
}
