<?php

namespace App\Http\Controllers;
use App\Categorie;
use App\Voiture;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create(){
        return view('AjoutCategorie');
    }

    public function store(Request $request){
        $categorie=new Categorie();
        $categorie->NomCategorie=$request->input('NomCategorie');
       
        $categorie->save();
         return redirect('/CategorieListe');
    }

    public function index(){
        $listCategorie = Categorie::paginate(8);
        $listCategorie->withPath('CategorieListe');
        
        return view('CategorieListe' , ['categories'=>$listCategorie]);
    }

    public function editCategorie($id){
        $categorie=Categorie::find($id);
        return view('editCategorie',['categorie'=>$categorie]);
    }

       //permet de modifier les donneés
       public function update(Request $request){
         
        $categorie=Categorie::find($request->id);
       
        $categorie->NomCategorie=$request->input('NomCategorie');
        $categorie->save();
        return redirect('/CategorieListe');
    }
   

    public function deleteCategorie($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        $listCategorie = Categorie::all();
        return redirect('/CategorieListe');
      
    }


    public function search(Request $request){
     
        $q=$request->searchvalue;

        // $listReservation = Reservation
        // ->join('users', 'annonce.user_id', '=', 'users.id')
        // -> where('NomClient','LIKE','%'.$q.'%')->orWhere('emailClient','LIKE','%'.$q.'%')->orWhere('Telephone','LIKE','%'.$q.'%')->orWhere('Voiture.Model','LIKE','%'.$q.'%')->get();
        // //  if(count($listReservation) > 0)
        $listCategorie=Categorie::where('NomCategorie','LIKE','%'.$q.'%')->orWhere('id','=',$q)->paginate(2);
        $listCategorie->appends(['searchvalue'=>$q]);
        $listCategorie->withPath('searchC');
        return  view('CategorieListe' , ['categories'=>$listCategorie])->withQuery ( $q );
            //  else return view ('welcome')->withMessage('No Details found. Try to search again !');

        return view('CategorieListe' , ['categories'=>$listCategorie]);
    }
}
