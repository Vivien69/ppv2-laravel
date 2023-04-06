<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Offre;
use Illuminate\Http\Request;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offre $offre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
