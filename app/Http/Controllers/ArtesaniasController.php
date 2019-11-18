<?php

namespace App\Http\Controllers;

use App\artesanias;
use Illuminate\Http\Request;

class ArtesaniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artesania=artesanias::orderBy('id','DESC')->paginate(5);
        return view('biblio.artesanias', compact('artesania'));
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
     * @param  \App\artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function show(artesanias $artesanias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function edit(artesanias $artesanias)
    {
        //
        $artesania=artesanias::find('$id');
        return view('artesanias.form', compact('artesania'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artesanias $artesanias)
    {
        //
        artesanias::find('$id')->update($request->all());
        return redirect()->route('artesanias.index')->with('success', 'Exitosa Actualizacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artesanias  $artesanias
     * @return \Illuminate\Http\Response
     */
    public function destroy(artesanias $artesanias)
    {
        //
        artesanias::find('$id')->delete();
        return redirect('/biblio/artesanias');
    }
}
