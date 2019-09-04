<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    
    public function index(){

        $listService = Service::paginate(10);
        $listService->withPath('ListeRendezVous');
        // dd(empty($listReservation) && $listReservation->count());
        return view('ListeRendezVous' , ['services'=>$listService]);

    }

    public function create(Request $request){
        $q=$request->service;
        return view('PrendreRendezVous', ['service'=>$q]);
    }
    public function store(Request $request){
       
        
        $RendezVous=new Service();
        $RendezVous->NomClient=$request->input('nom');
        $RendezVous->emailClient=$request->input('email');
        $RendezVous->Telephone=$request->input('tel');
        $RendezVous->NomService=$request->input('nomService');
        $RendezVous->Date=$request->input('date');
        $RendezVous->Heure=$request->input('Heure');
        $RendezVous->Vehicule=$request->input('marque');
        $RendezVous->TypeLavage=$request->input('type');
        $RendezVous->save();
       
           
         return redirect('/') ;
    }

    //permet de supprimer une rendez_vous
    public function destroy(Request $request,$id){
        $service=Service::find($id);
        $service->delete();
        return redirect('ListeRendezVous');
    }

      //permet de modifier les donneés
      public function update(Request $request,$id){
        $service=Service::find($id);
        
        $service->etat=$request->input('etat');
        // $name = 'Krunal';
        // Mail::to('maryamboulouise@gmail.com')->send(new SendMailable($name,$request->input('etat')));
       
        $service->save();
        return redirect('ListeRendezVous');
    }

    public function search(Request $request){
     
        $q=$request->searchvalue;

        // $listReservation = Reservation
        // ->join('users', 'annonce.user_id', '=', 'users.id')
        // -> where('NomClient','LIKE','%'.$q.'%')->orWhere('emailClient','LIKE','%'.$q.'%')->orWhere('Telephone','LIKE','%'.$q.'%')->orWhere('Voiture.Model','LIKE','%'.$q.'%')->get();
        // //  if(count($listReservation) > 0)
        $listRendezVous=Service::where('NomService','LIKE','%'.$q.'%')->orWhere('id','=',$q)->orWhere('Date','LIKE','%'.$q.'%')->orWhere('Heure','LIKE','%'.$q.'%')->paginate(2);
        $listRendezVous->appends(['searchvalue'=>$q]);
        $listRendezVous->withPath('searchS');
        return  view('ListeRendezVous' , ['services'=>$listRendezVous])->withQuery ( $q );
            //  else return view ('welcome')->withMessage('No Details found. Try to search again !');

        return view('ListeRendezVous' , ['services'=>$listRendezVous]);
    }

}

