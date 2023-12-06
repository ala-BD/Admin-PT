<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; //Realtion controller avec le model admin


class AdminController extends Controller
{
    // fct afficher afficher ml base
    public function getAdmin(){
        $admin = Admin::all();        //select * from admins

        return view('liste-admin',['donnees'=>$admin]);

    }
    // fct supprimer ml base wel liste
    public function DeleteAdmin($id){
        $admin =Admin::find($id);   // select * from admins id(base) = $_GET['id'](url)
        $admin->delete();
        return redirect('/liste-admin')->with('msg','Suppression faite avec Succès');
    }
    //fct ajouter ml formulaire
    public function ajoutAdmin(Request $req){
        $admin = new Admin ;  //creation d'une nouvelle instantce du classe

        $admin ->nom =$req ->nom;
        $admin ->login =$req ->login;
        $admin ->mail =$req ->mail;
        $admin ->password =$req ->password;

        $admin->save(); // insert into table
        return redirect('/liste-admin')->with('msg','Ajout fait avec Succès');
    }
    // fct modification
    public function updateAdmin(Request $req){
        $admin = Admin::find($req->id);    

        
        $admin ->nom =$req ->nom;
        $admin ->login =$req ->login;
        $admin ->mail =$req ->mail;
        $admin ->password =$req ->password;

        $admin->save(); // insert into table
        return redirect('/liste-admin')->with('msg','La modification faite avec Succès');
    } 

    //fct  view modif
    public function getAdminId($id){
        $admin = Admin::find($id);
        return view ('modifier-admin',['data'=>$admin]);
    }

}
