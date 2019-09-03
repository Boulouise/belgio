<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create(){
        return view('CreateCategorie');
    }

    public function index(){
        $listCategorie = Categorie::paginate(2);
        $listCategorie->withPath('categorie');
        return view('categorie' , ['categories'=>$listCategorie]);
    }

    public function editCategorie($id){
        $categorie=Categorie::find($id);
        return view('editCategorie',['categorie'=>$categorie]);
    }
    public function deleteCategorie($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        $listCategorie = Categorie::all();
        return redirect('/admin');
      
    }
}
