<?php

namespace App\Http\Controllers;

use App\acercaDe;
use Illuminate\Http\Request;

class AcercaDeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sitio.acercaDe');
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
     * @param  \App\acercaDe  $acercaDe
     * @return \Illuminate\Http\Response
     */
    public function show(acercaDe $acercaDe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\acercaDe  $acercaDe
     * @return \Illuminate\Http\Response
     */
    public function edit(acercaDe $acercaDe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\acercaDe  $acercaDe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, acercaDe $acercaDe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\acercaDe  $acercaDe
     * @return \Illuminate\Http\Response
     */
    public function destroy(acercaDe $acercaDe)
    {
        //
    }
}
