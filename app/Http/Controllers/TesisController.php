<?php

namespace App\Http\Controllers;

use App\tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tesis=tesis::orderBy('id','DESC')->paginate(5);
        return view('biblio.tesis', compact('tesis'));
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
     * @param  \App\tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function show(tesis $tesis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function edit(tesis $tesis)
    {
        //
        $tesis=tesis::find('$id');
        return view('tesis.form', compact('tesis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tesis $tesis)
    {
        //
        tesis::find('$id')->update($request->all());
        return redirect()->route('tesis.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tesis  $tesis
     * @return \Illuminate\Http\Response
     */
    public function destroy(tesis $tesis)
    {
        //
        tesis::find('$id')->delete();
        return redirect('/biblio/tesis');
    }
}
