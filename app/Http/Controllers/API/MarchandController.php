<?php

namespace App\Http\Controllers\API;

use App\Models\Marchand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\MarchandRequest;

class MarchandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marchands = Marchand::all();
        
        return response()->json($marchands);
    }

    public function searchLike($params)
    {
        $marchands = DB::table('marchands')->where('name', 'LIKE', '%'. $params .'%')->get();
        
        return response()->json($marchands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\MarchandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarchandRequest $request)
    {
        //Create a marchand
        $marchand = Marchand::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'url' => $request->url,
            'url_conditions' => $request->url_conditions,
            'slug' => $request->slug,
            'picture' => $request->picture,
            'offers' => $request->offers,
            'content' => $request->content,
            'foncparrainage' => $request->foncparrainage,
            'etat' => $request->etat,
            'actif' => $request->actif,
            'categorie_id' => $request->categorie_id,
            'marchand_id' => $request->marchand_id
        ]);

        return response()->json($marchand, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $marchand
     * @return \Illuminate\Http\Response
     */
    public function show(Marchand $marchand)
    {
        return response()->json($marchand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\MarchandRequest  $request
     * @param  \App\Models\Marchand  $marchand
     * @return \Illuminate\Http\Response
     */
    public function update(MarchandRequest $request, Marchand $marchand)
    {

        //Update a marchand
        $marchand->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'url' => $request->url,
            'url_conditions' => $request->url_conditions,
            'slug' => $request->slug,
            'picture' => $request->picture,
            'offers' => $request->offers,
            'content' => $request->content,
            'foncparrainage' => $request->foncparrainage,
            'etat' => $request->etat,
            'actif' => $request->actif,
            'categorie_id' => $request->categorie_id,
            'marchand_id' => $request->marchand_id
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marchand $marchand)
    {
        $marchand->delete();

        return response()->json();
    }
}
