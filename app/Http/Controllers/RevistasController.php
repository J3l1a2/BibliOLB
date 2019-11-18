<?php

namespace App\Http\Controllers;

use App\revistas;
use Illuminate\Http\Request;

class RevistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $revistas=revistas::orderBy('id','DESC')->paginate(5);
        return view('biblio.revistas', compact('revistas'));
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
     * @param  \App\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function show(revistas $revistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function edit(revistas $revistas)
    {
        //
        $revistas=revistas::find('$id');
        return view('revistas.form', compact('revistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, revistas $revistas)
    {
        //
        revistas::find('$id')->update($request->all());
        return redirect()->route('revistas.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\revistas  $revistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(revistas $revistas)
    {
        //
        revistas::find('$id')->delete();
        return redirect('/biblio/revistas');
    }
}
