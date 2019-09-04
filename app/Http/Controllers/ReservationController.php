<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class ReservationController extends Controller
{
    public function create(){
        return view('Form-reservation');
    }

    public function store(Request $request){
       
        $listReservation = DB::table('reservations')
                    // ->where('voiture_id','=',$request->input('voiture'))
                    ->whereBetween('DateRecuperation', [$request->input('debut'),$request->input('fin')])
                     ->where('voiture_id','=',$request->input('voiture'))
                    ->orWhereBetween('DateRetour',  [$request->input('debut'), $request->input('fin')])
                    ->where('voiture_id','=',$request->input('voiture'))
                    ->get();
                    if (count($listReservation)>=1){
                        session()->flash('DateVerification','Cette voiture est déja reservé, choisissez une autre date de réservation ou bien un autre modéle');
                        return redirect('/reservation') ;
                       // return view('/Form-reservation',['voiture'=> $request->all()]);
                    }
                   
                     //dd(count($listReservation));
        $reservation=new Reservation();
        $reservation->NomClient=$request->input('nom');
        $reservation->emailClient=$request->input('email');
        $reservation->Telephone=$request->input('tel');
        $reservation->DateRecuperation=$request->input('debut');
        $reservation->DateRetour=$request->input('fin');
        $reservation->voiture_id=$request->input('voiture');
        $reservation->save();
       
            session()->flash('success','La reservation a été bien enregistrée');
         return redirect('/reservation') ;
    }

    public function index(){

        $listReservation = Reservation::paginate(10);
        $listReservation->withPath('adminC');
        // dd(empty($listReservation) && $listReservation->count());
        return view('adminC' , ['reservations'=>$listReservation]);

    }
    public function search(Request $request){
     
        $q=$request->searchvalue;
        // $listReservation = Reservation::
        // ->join('users', 'annonce.user_id', '=', 'users.id')
        // -> where('NomClient','LIKE','%'.$q.'%')->orWhere('emailClient','LIKE','%'.$q.'%')->orWhere('Telephone','LIKE','%'.$q.'%')->orWhere('Voiture.Model','LIKE','%'.$q.'%')->get();
        // //  if(count($listReservation) > 0)
        $listReservation=Reservation
        ::Join('voitures', 'voitures.id', '=', 'voiture_id')
        -> where('NomClient','LIKE','%'.$q.'%')->orWhere('emailClient','LIKE','%'.$q.'%')->orWhere('Telephone','LIKE','%'.$q.'%')->orWhere('Model','LIKE','%'.$q.'%')->paginate(2);

        $listReservation->appends(['searchvalue'=>$q]);
        $listReservation->withPath('searchr');
        return  view('adminC' , ['reservations'=>$listReservation])->withQuery ( $q );
            //  else return view ('welcome')->withMessage('No Details found. Try to search again !');

        return view('adminC' , ['reservations'=>$listReservation]);
    }

    //permet de modifier les donneés
    public function update(Request $request,$id){
        $reservation=Reservation::find($id);
        
        $reservation->etat=$request->input('etat');
        $name = 'Krunal';
        Mail::to('maryamboulouise@gmail.com')->send(new SendMailable($name,$request->input('etat')));
       
        $reservation->save();
        return redirect('adminC');
    }

     //permet de supprimer une vehicule
     public function destroy(Request $request,$id){
        $reservation=Reservation::find($id);
        $reservation->delete();
        return redirect('adminC');
    }

    

}
