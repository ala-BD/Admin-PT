<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;


class DevisController extends Controller
{
    public function getDevis(){
        $devis = Devis::all();     //select * from devis

        return view('liste-devis',['donnees'=>$devis]);

    }

    public function DeleteDevis($id){
        $devis =Devis::find($id);   // select * from devis id(base) = $_GET['id'](url)
        $devis->delete();
        return redirect('/liste-devis')->with('msg','Suppression faite avec Succès');
    }

    public function ajoutDevis(Request $req){
        $devis = new Devis ;  //creation d'une nouvelle instantce du classe

        $devis ->nom =$req ->nom;
        $devis ->societe =$req ->societe;
        $devis ->tel =$req ->tel;
        $devis ->mail =$req ->mail;
        $devis ->textecible =$req ->textecible;
        $devis ->nbmots =$req ->nbmots;
        $devis ->cmntr =$req ->cmntr;

        $devis->save(); // insert into table
        return redirect('/liste-devis')->with('msg','Ajout fait avec Succès');
    }

    
    // fct modif
    public function updateDevis(Request $req){

        $devis = Devis::find($req->id); 
       
        $devis ->nom =$req ->nom;
        $devis ->societe =$req ->societe;
        $devis ->tel =$req ->tel;
        $devis ->mail =$req ->mail;
        $devis ->textecible =$req ->textecible;
        $devis ->nbmots =$req ->nbmots;
        $devis ->cmntr =$req ->cmntr;
        
        $devis->save(); // insert into table
        return redirect('/liste-devis')->with('msg','La modification faite avec Succès');
    }


    //fct  view modif
    public function getDevisId($id){
        $devis = Devis::find($id);
        return view ('modifier-devis',['data'=>$devis]);
    }


    
}
