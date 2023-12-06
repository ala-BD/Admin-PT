<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    public function getSupport(){
        $support = Support::all();
        //select * from support

        return view('liste-support',['donnees'=>$support]);

    }

    public function DeleteSupport($id){
        $support =Support::find($id);   // select * from devis id(base) = $_GET['id'](url)
        $support->delete();
        return redirect('/liste-support')->with('msg','Suppression faite avec Succès');
    }

    public function ajoutSupport(Request $req){
        $support = new Support ;  //creation d'une nouvelle instantce du classe

        $support ->nomdeclient =$req ->nomdeclient;
        $support ->scte =$req ->scte;
        $support ->telephone =$req ->telephone;
        $support ->email =$req ->email;
        $support ->textciblee =$req ->textciblee;
        $support ->nombredesmots =$req ->nombredesmots;
        $support ->taches =$req ->taches;
        $support ->prix =$req ->prix;
        $support ->created_at =$req ->created_at;
        $support ->commentaire =$req ->commentaire;
        

        $support->save(); // insert into table
        return redirect('/liste-support')->with('msg','Ajout fait avec Succès');
    }

    //fct modif
    public function updateSupport(Request $req){

        $support = Support::find($req->id);

        $support ->nomdeclient =$req ->nomdeclient;
        $support ->scte =$req ->scte;
        $support ->telephone =$req ->telephone;
        $support ->email =$req ->email;
        $support ->textciblee =$req ->textciblee;
        $support ->nombredesmots =$req ->nombredesmots;
        $support ->taches =$req ->taches;
        $support ->prix =$req ->prix;
        $support ->created_at =$req ->created_at;
        $support ->commentaire =$req ->commentaire;
        

        $support->save(); // insert into table
        return redirect('/liste-support')->with('msg','La modification faite avec Succès');

    }


    //fct  view modif
    public function getSupportId($id){
        $support = Support::find($id);
        return view ('modifier-support',['data'=>$support]);
    }

    //fct afficher la facture
    public function GetFactureId($id){
        $facture = Support::find($id);
        return view ('devisPDF',['data'=>$facture]);
    }


}
