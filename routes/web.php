<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\devisController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SupportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/auth-register', function () {
    return view('auth.register');
});


Route::get('/test', function () {
    return view('theme');
});


Route::get('/ajout-admin', function () {
    return view('ajout-admin');
});

Route::get('/ajout-client', function () {
    return view('ajout-client');
});

Route::get('/ajout-devis', function () {
    return view('ajout-devis');
});

Route::get('/ajout-support', function () {
    return view('ajout-support');
});











/*Route::get('/modifier-admin', function () {
    return view('modifier-admin');
});

Route::get('/modifier-client', function () {
    return view('modifier-client');
});

Route::get('/modifier-devis', function () {
    return view('modifier-devis');
});

Route::get('/modifier-support', function () {
    return view('modifier-support');
});

/*Route::get('/liste-client', function () {
    return view('liste-client');
});*/


/*Route::get('/liste-admin', function () {
    return view('liste-admin');
});*/

/*Route::get('/liste-devis', function () {
    return view('liste-devis');
});*/

/*Route::get('/liste-message', function () {
    return view('liste-message');
});*/

/*Route::get('/liste-support', function () {
    return view('liste-support');
});*/






//les routes des fonctions affichage ml base

Route::get('/liste-admin',[AdminController::class, 'getAdmin']);


Route::get('/liste-client',[ClientController::class, 'getClient']);


Route::get('/liste-devis',[DevisController::class, 'getDevis']);


Route::get('/liste-message',[MessageController::class, 'getMessage']);


Route::get('/liste-support',[SupportController::class, 'getSupport']);



// les routes des fonctions suuprimer //

Route::get('suppAdmin/{id}',[AdminController::class, 'DeleteAdmin']);

Route::get('suppClient/{id}',[ClientController::class, 'DeleteClient']);

Route::get('suppDevis/{id}',[DevisController::class, 'DeleteDevis']);

Route::get('suppMessage/{id}',[MessageController::class, 'DeleteMessage']);

Route::get('suppSupport/{id}',[SupportController::class, 'DeleteSupport']);


//les routes des fonctions ajouter //

Route::post('/addadmin',[AdminController::class , 'ajoutAdmin']);

Route::post('/addclient',[ClientController::class , 'ajoutClient']);

Route::post('/adddevis',[DevisController::class , 'ajoutdevis']);

Route::post('/addsupport',[SupportController::class , 'ajoutsupport']);


//les routes view modifier

Route::get('modifier-admin/{id}',[AdminController::class,'getAdminId']);

Route::get('modifier-client/{id}',[ClientController::class,'getClientId']);

Route::get('modifierDevis/{id}',[DevisController::class,'getDevisId']);

Route::get('modifierMessage/{id}',[MessageController::class,'getMessageId']);

Route::get('modifierSupport/{id}',[SupportController::class,'getSupportId']);



//les routes fct modifier

Route::post('modifadmin',[AdminController::class ,'updateAdmin']);


Route::post('modifclient',[ClientController::class ,'updateClient']);


Route::post('modifdevis',[DevisController::class ,'updateDevis']);


Route::post('modifsupport',[SupportController::class ,'updateSupport']);


// route de login 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// route de pdf

Route::get('/pdf', function () {
    return view('devisPDF');
});

Route::get('devisPDF/{id}',[SupportController::class,'GetFactureId']);