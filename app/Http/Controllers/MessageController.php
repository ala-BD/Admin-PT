<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class MessageController extends Controller
{
    public function getMessage(){
        $message = Contact::all();     //select * from contact

        return view('liste-message',['donnees'=>$message]);

    }


    public function DeleteMessage($id){
        $message = Contact::find($id);   // select * from message id(base) = $_GET['id'](url)
        $message->delete();
        return redirect('/liste-message')->with('msg','Suppression faite avec Succès');
    }


    //fct modif
    public function getMessageId($id){
        $message = Message::find($id);
        return view ('modifier-message',['data'=>$message]);
    }
}
