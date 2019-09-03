<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use Illuminate\Support\Facades\Storage;

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
        return view('Form-reservation',['voiture'=>$voiture]);
    }
    public function editVoiture($id){
        $voiture=Voiture::find($id);
        return view('editVoiture',['voiture'=>$voiture]);
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
        $voiture->Carburant=$request->input('Carburant');
        $voiture->BoiteVitesse=$request->input('BoiteVitesse');
        $voiture->Puissance=$request->input('Puissance');
        $voiture->Prix=$request->input('Prix');
        $voiture->save();
        return redirect('/admin');
    }
   
    public function create(){
        return view('AjoutVoiture');
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
        $voiture->BoiteVitesse=$request->input('BoiteVitesse');
        $voiture->Puissance=$request->input('Puissance');
        $voiture->Prix=$request->input('Prix');
        
        $voiture->save();

         return redirect('/admin');
    }

    
}
