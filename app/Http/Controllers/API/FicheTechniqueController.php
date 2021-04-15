<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FicheTechnique;
use Illuminate\Http\Request;

class FicheTechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_all()
    {
       $ficheTechniques = FicheTechnique::all();
        $response["ficheTechniques"] = $ficheTechniques;
        $response["success"] = 1;
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ficheTechnique = FicheTechnique::create($request->all());
        
        return response()->json(Exploitation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FicheTechnique  $ficheTechnique
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $ficheTechnique = DB::table('fiche_technique')->where('id', $request->input('id'))->get();
        $response['ficheTechnique'] = $ficheTechnique; 
        $response["success"] =  1;

        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FicheTechnique  $ficheTechnique
     * @return \Illuminate\Http\Response
     */
    public function update(FicheTechnique $ficheTechnique)
    {
        $ficheTechnique = FicheTechnique::where('id', $request->id)
                        ->where('id',$request->id)
                        ->first();
       $ficheTechnique->ethrellage = $request->input('ethrellage');
       $ficheTechnique->mode_plantation = $request->input('mode_plantation');
       
       $ficheTechnique->densite = $request->input('densite');
       $ficheTechnique->date_tif = $request->input('date_tif');
       $ficheTechnique->exploitation_id = $request->input('exploitation_id');
       $ficheTechnique->marqueur = $request->input('marqueur');
       $ficheTechnique->quantite_a_produire = $request->input('quantite_a_produire');
       
       $ficheTechnique->save();
       $response["ficheTechnique"] = $ficheTechnique;
       $response["success"] = 1;
   
       return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FicheTechnique  $ficheTechnique
     * @return \Illuminate\Http\Response
     */
    public function destroy(FicheTechnique $ficheTechnique)
    {
        FicheTechnique::where('id', $id)->delete();
        
        return response()->json('Suppresion reussie');
    }
}
