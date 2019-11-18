<?php

namespace App\Http\Controllers;

use App\afiches;
use Illuminate\Http\Request;

class AfichesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $afiche=afiches::orderBy('id','DESC')->paginate(5);
        return view('biblio.afiches', compact('afiche'));
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
     * @param  \App\afiches  $afiches
     * @return \Illuminate\Http\Response
     */
    public function show(afiches $afiches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\afiches  $afiches
     * @return \Illuminate\Http\Response
     */
    public function edit(afiches $afiches)
    {
        //
        $afiche=afiches::find('$id');
        return view('afiches.form', compact('afiche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\afiches  $afiches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, afiches $afiches)
    {
        //
        afiches::find('$id')->update($request->all());
        return redirect()->route('afiches.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\afiches  $afiches
     * @return \Illuminate\Http\Response
     */
    public function destroy(afiches $afiches)
    {
        //
        afiches::find('$id')->delete();
        return redirect('/biblio/afiches');
    }
}
