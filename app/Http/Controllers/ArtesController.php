<?php

namespace App\Http\Controllers;

use App\artes;
use Illuminate\Http\Request;

class ArtesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arte=artes::orderBy('id','DESC')->paginate(5);
        return view('biblio.artes', compact('arte'));
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
     * @param  \App\artes  $artes
     * @return \Illuminate\Http\Response
     */
    public function show(artes $artes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artes  $artes
     * @return \Illuminate\Http\Response
     */
    public function edit(artes $artes)
    {
        //
        $arte=artes::find('$id');
        return view('artes.form', compact('arte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artes  $artes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artes $artes)
    {
        //
        artes::find('$id')->update($request->all());
        return redirect()->route('artes.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artes  $artes
     * @return \Illuminate\Http\Response
     */
    public function destroy(artes $artes)
    {
        //
        artes::find('$id')->delete();
        return redirect('/biblio/artes');
    }
}
