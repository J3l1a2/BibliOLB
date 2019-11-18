<?php

namespace App\Http\Controllers;

use App\impresos;
use Illuminate\Http\Request;

class ImpresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $impresos=impresos::orderBy('id','DESC')->paginate(5);
        return view('biblio.impresos', compact('impresos'));
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
     * @param  \App\impresos  $impresos
     * @return \Illuminate\Http\Response
     */
    public function show(impresos $impresos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\impresos  $impresos
     * @return \Illuminate\Http\Response
     */
    public function edit(impresos $impresos)
    {
        //
        $impresos=impresos::find('$id');
        return view('impresos.form', compact('impresos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\impresos  $impresos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, impresos $impresos)
    {
        //
        impresos::find('$id')->update($request->all());
        return redirect()->route('impresos.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\impresos  $impresos
     * @return \Illuminate\Http\Response
     */
    public function destroy(impresos $impresos)
    {
        //
        impresos::find('$id')->delete();
        return redirect('/biblio/ompresos');
    }
}
