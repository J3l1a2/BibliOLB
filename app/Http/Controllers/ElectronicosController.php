<?php

namespace App\Http\Controllers;

use App\electronicos;
use Illuminate\Http\Request;

class ElectronicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $electronico=electronicos::orderBy('id','DESC')->paginate(5);
        return view('biblio.electronicos', compact('electronico'));
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
     * @param  \App\electronicos  $electronicos
     * @return \Illuminate\Http\Response
     */
    public function show(electronicos $electronicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\electronicos  $electronicos
     * @return \Illuminate\Http\Response
     */
    public function edit(electronicos $electronicos)
    {
        //
        $electronico=electronicos::find('$id');
        return view('electronicos.form', compact('electronico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\electronicos  $electronicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, electronicos $electronicos)
    {
        //
        electronicos::find('$id')->update($request->all());
        return redirect()->route('electronicos.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\electronicos  $electronicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(electronicos $electronicos)
    {
        //
        electronicos::find('$id')->delete();
        return redirect('/biblio/electronicos');
    }
}
