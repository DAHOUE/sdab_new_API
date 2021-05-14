<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FicheTechnique;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Http\Resources\FicheTechniqueRessource;
use DB;

class FicheTechniqueController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Renvoie toutes les données de la base
    public function index()
    {
        $ficheTechniques = FicheTechnique::all();
        
        /*$response["ficheTechniques"] = $ficheTechniques;
        $response["success"] = 1;*/

        return $this->sendResponse(new FicheTechniqueRessource($ficheTechniques), 'Fiche Technique created successfully.');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //enrégistrer une donnée
    public function create(Request $request)
    {
        /*$ficheTechnique = FicheTechnique::create($request->all());
        
        return response()->json(Exploitation);*/
	
        
			$data = $request->all();

			$validator = Validator::make($data, [
				   'ethrellage' => 'required',
				   'mode_plantation' => 'required',
				   'densite' => 'required',
				   'date_tif' => 'required',
				   'exploitation_id' => 'required',
				   'marqueur' => 'required',
				   'quantite_a_produire' => 'required',
			   ]);

			if($validator->fails()){

                return $this->sendError('Validation Error.', $validator->errors());
               // return $this->sendError('Validation Error.', $data);       
            }

			$ficheTechnique = FicheTechnique::create($data);

			return $this->sendResponse(new FicheTechniqueRessource($ficheTechnique), 'Fiche Technique created successfully.');

	}

    /**
     * Display the specified resource.
     *
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     *
     * 
     */
    public function show($id)
    {
       // $ficheTechnique = DB::table('fiche_technique')->where('id',$id);
       
        $ficheTechnique = FicheTechnique::find($id);
        $response['ficheTechnique'] = $ficheTechnique; 
        $response["success"] =  1;

        if($ficheTechnique==null)
        {
            return $this->sendError('Cette fiche n\'existe pas',-1);
        }
        

        

        return $this->sendResponse(new FicheTechniqueRessource($ficheTechnique), 'Fiche trouvée');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FicheTechnique  $ficheTechnique
     * @param int $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request,  $id)
    {
        $ficheTechnique = FicheTechnique::find(2);

        /*$ficheTechnique = $request->all();
        DB::table('fiches_techniques')
              ->where('id',  $request->id)
              ->update(['densite' => $request->input('densite')]);*/

       /* $ficheTechnique = FicheTechnique::where('id', $request->id)
                        ->where('id',$request->id)
                        ->first();*/
       $ficheTechnique->ethrellage = $request->input('ethrellage');
       $ficheTechnique->mode_plantation = $request->input('mode_plantation');
       
       $ficheTechnique->densite = $request->input('densite');
       $ficheTechnique->date_tif = $request->input('date_tif');
       $ficheTechnique->exploitation_id = $request->input('exploitation_id');
       $ficheTechnique->marqueur = $request->input('marqueur');
       $ficheTechnique->quantite_a_produire = $request->input('quantite_a_produire');
       
       //$ficheTechnique->update($request->all());
       $ficheTechnique->save();
       $response["ficheTechnique"] = $ficheTechnique;
       $response["success"] = 1;
   
       return response()->json($response);
     /* $ficheTechnique->update($request->all());

        return response(['ficheTechnique' => new FicheTechniqueRessource($ficheTechnique), 'message' => 'Update successfully'], 200);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FicheTechnique 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // FicheTechnique::where('id', $id)->delete();
        //$ficheTechnique = FicheTechnique::find($id);
        DB::table('fiche_techniques')->where('id', '=', $id)->delete();

        return response()->json('Suppresion reussie');
    }
}
