<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function getClient(){
        $client = Client::all();     //select * from admins

        return view('liste-client',['donnees'=>$client]);

    }


    public function DeleteClient($id){
        $client =Client::find($id);   // select * from admins id(base) = $_GET['id'](url)
        $client->delete();
        return redirect('/liste-client')->with('msg','Suppression faite avec Succès');
    }


    public function ajoutClient(Request $req){
        $client = new Client ;  //creation d'une nouvelle instantce du classe

        $client ->nom =$req ->nom;
        $client ->login =$req ->login;
        $client ->mail =$req ->mail;
        $client ->password =$req ->password;
        

        $client->save(); // insert into table
        return redirect('/liste-client')->with('msg','Ajout fait avec Succès');
    }

    //fct modif
    public function updateClient(Request $req){

        $client = Client::find($req->id); 
       
        $client ->nom =$req ->nom;
        $client ->login =$req ->login;
        $client ->mail =$req ->mail;
        $client ->password =$req ->password;
        

        $client->save(); // insert into table
        return redirect('/liste-client')->with('msg','La modification faite avec Succès');
    }

    //fct view modif
    public function getClientId($id){
        $client = Client::find($id);
        return view ('modifier-client',['data'=>$client]);
    }

}
