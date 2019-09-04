<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\Categorie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\Resource;

class VoitureController extends Controller
{
    public function index(){
        $listVoiture = Voiture::paginate(2);
        $listVoiture->withPath('reservation');
        return view('reservation' , ['voitures'=>$listVoiture]);
    }

    
    public function search(Request $request){
     
        $q=$request->searchvalue;

        // $listReservation = Reservation
        // ->join('users', 'annonce.user_id', '=', 'users.id')
        // -> where('NomClient','LIKE','%'.$q.'%')->orWhere('emailClient','LIKE','%'.$q.'%')->orWhere('Telephone','LIKE','%'.$q.'%')->orWhere('Voiture.Model','LIKE','%'.$q.'%')->get();
        // //  if(count($listReservation) > 0)
        $listVoiture=Voiture::where('Puissance','LIKE','%'.$q.'%')->orWhere('BoiteVitesse','LIKE','%'.$q.'%')->orWhere('Carburant','LIKE','%'.$q.'%')->orWhere('Model','LIKE','%'.$q.'%')->orWhere('Prix','LIKE','%'.$q.'%')->paginate(2);
        $listVoiture->withPath('');
        return  view('admin' , ['voitures'=>$listVoiture])->withQuery ( $q );
            //  else return view ('welcome')->withMessage('No Details found. Try to search again !');

        return view('admin' , ['voitures'=>$listVoiture]);
    }

    public function listeVoiture(){
        $listVoiture = Voiture::paginate(2);
        $listVoiture->withPath('admin');
        
        return view('admin' , ['voitures'=>$listVoiture]);
    }

    public function edit($id){
        $voiture=Voiture::find($id);
        $data=session('data');
  
        return view('Form-reservation',['voiture'=>$voiture,'data'=>$data]);
    }
    public function editVoiture($id){
        $voiture=Voiture::find($id);
        $listCategorie=Categorie::all();
        return view('EditVoiture',['voiture'=>$voiture,'categories'=>$listCategorie]);
    }
    public function deleteVoiture($id){
        $voiture=Voiture::find($id);
        $voiture->delete();
        $listVoiture = Voiture::all();
        return redirect('/admin');
      
    }

      //permet de modifier les donneés
      public function update(Request $request){
         
        $voiture=Voiture::find($request->id);
        $voiture->Model=$request->input('Model');
        $uploadedFile = $request->file('img');

        $filename = time().$uploadedFile->getClientOriginalName();

       Storage::disk('public')->putFileAs(
        'files/',
        $uploadedFile,
        $filename
      );
      
    
     
        $voiture->img= '/storage/files/'.$filename;
        $voiture->categorie_id=$request->categorie_id;
        $voiture->Carburant=$request->input('Carburant');
        $voiture->BoiteVitesse=$request->input('BoiteVitesse');
        $voiture->Puissance=$request->input('Puissance');
        $voiture->Prix=$request->input('Prix');
        $voiture->save();
        return redirect('/admin');
    }
   
    public function create(){
        $listCategorie=Categorie::all();
        return view('AjoutVoiture' , ['categories'=>$listCategorie]);
        
    }

    public function store(Request $request){
        $voiture=new Voiture();
        $uploadedFile = $request->file('img');

        $filename = time().$uploadedFile->getClientOriginalName();

       Storage::disk('public')->putFileAs(
        'files/',
        $uploadedFile,
        $filename
      );
      
     
        $voiture->Model=$request->input('Model');
        $voiture->img= '/storage/files/'.$filename;
        $voiture->Carburant=$request->input('Carburant');
        $voiture->categorie_id=$request->categorie_id;
        $voiture->BoiteVitesse=$request->input('BoiteVitesse');
        $voiture->Puissance=$request->input('Puissance');
        $voiture->Prix=$request->input('Prix');
        
        $voiture->save();

         return redirect('/admin');
    }
    

    public function VoitureParCategorieId(Request $request){
        
        $voitures = Categorie ::with('Voitures')->find($request->categorie)->Voitures;
        // $encodedSku = json_encode($voitures);
       
        return response()->json( ['voitures' => $voitures]);
    }
    public function VoitureParCategorieName(Request $request){
        //$voitures = Voiture::where('categorweie_id.name','=',$request->categorie);
        // $encodedSku = json_encode($voitures);
       // $voitures = Categorie ::where('NomCategorie','LIKE','%'.$request->categorie.'%')->Voitures;
       $categories= Categorie ::all();
       if(!empty($request->categorie)){
        $voitures = Categorie ::with('Voitures')->find($request->categorie)->Voitures;
        return view('layouts.welc',['voitures'=>$voitures,'categories'=>$categories]);
       }
        $voitures = Categorie ::with('Voitures')->find(1)->Voitures;
      
        return view('layouts.welc',['voitures'=>$voitures,'categories'=>$categories]);
    }
    public function chosee_a_car(Request $request){
        //$voitures = Voiture::where('categorweie_id.name','=',$request->categorie);
        // $encodedSku = json_encode($voitures);
       // $voitures = Categorie ::where('NomCategorie','LIKE','%'.$request->categorie.'%')->Voitures;
      // dd($request->all());

       //$voiture=Voiture::find($id);
       session(['data' => $request->all()]);
       $categories= Categorie ::all();
       if(!empty($request->categorie)){
        $voitures = Categorie ::with('Voitures')->find($request->categorie)->Voitures;
        return view('layouts.choose_a_car',['voitures'=>$voitures,'categories'=>$categories]);
       }
        $voitures =Voiture::all();
      
        return view('layouts.choose_a_car',['voitures'=>$voitures,'categories'=>$categories]);
    }
}
