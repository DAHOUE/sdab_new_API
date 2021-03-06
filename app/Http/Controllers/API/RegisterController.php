<?php

   namespace App\Http\Controllers\API;

   use Illuminate\Http\Request;
   use App\Http\Controllers\API\BaseController as BaseController;
   use App\Models\User;
   use Illuminate\Support\Facades\Auth;
   use Validator;

   class RegisterController extends BaseController
   {
       /**
        * Register api
        *
        * @return \Illuminate\Http\Response
        */
       public function register(Request $request)
       {
           $validator = Validator::make($request->all(), [
               'nom' => 'required',
               'prenom' => 'required',
               'adresse' => 'required',
               'statut' => 'required',
               'phone' => 'required',
               'password' => 'required',
               'c_password' => 'required|same:password',
           ]);

           if($validator->fails()){
               return $this->sendError('Validation Error.', $validator->errors());
           }


           $user = new User();
           $user->nom = $request->nom;
           $user->prenom = $request->prenom;
           $user->statut = $request->statut;
           $user->phone = $request->phone;
           $user->adresse = $request->adresse;
           $user->password = bcrypt($request->password);
           $success['token'] =  $user->createToken('MyApp')->accessToken;
           $user->save();
           $success['nom'] =  $user->nom;


           return $this->sendResponse($success, 'User register successfully.');
       }

       /**
        * Login api
        *
        * @return \Illuminate\Http\Response
        */
       public function login(Request $request)
       {
           if(Auth::attempt(['phone' => $request->phone, 'password' => $request->password])){
               $user = Auth::user();
               //$success['token'] =  $user->remember_token;
               $success['nom'] =  $user->nom;

               ///ceci est l'ajout que j'ai fait le 09/05/2021 pour le token. Il s'agit de tout ce qu'ily a entre les ///.
               $accessToken = auth()->user()->createToken('authToken')->accessToken;
			   $success['token'] = $accessToken;
               ///

               return $this->sendResponse($success, 'User login successfully.');
           }
           else{
               return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
           }
       }
   }
