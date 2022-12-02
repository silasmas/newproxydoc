<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\ActeController;

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
    return view('pages.index');
})->name('home');
Route::get('/abonnement', [AbonnementController::class, 'index'])->name('abonnement');
Route::get('/detailAbonnement', [AbonnementController::class, 'detail'])->name('detailAbonnement');
Route::get('about', function () {
    return view('pages.about');
})->name('about');
Route::get('services', function () {
    return view('pages.services');
})->name('services');
Route::get('/docteur', [AbonnementController::class, 'docteur'])->name('docteur');
Route::get('/detailDocteur', [AbonnementController::class, 'detailDocteur'])->name('detailDocteur');
Route::get('/createAbonnement/{id}', [AbonnementController::class, 'show'])->name('createAbonnement');

Route::post('/abonnement', [AbonnementController::class, 'store'])->name('abonnement');

Route::get('/retour', [AbonnementController::class, 'index'])->name('retour');
Route::post('/retour', [AbonnementController::class, 'retour'])->name('retour');
Route::post('/notify', [AbonnementController::class, 'notify'])->name('notify');
Route::post('/retourAchat', [AchatController::class, 'retour'])->name('retourAchat');
Route::post('/notifyAchat', [AchatController::class, 'notify'])->name('notifyAchat');

Route::get('/monpanier', [ProduitController::class, 'monpanier'])->name('monpanier');
Route::get('/notify', [AbonnementController::class, 'note'])->name('notify');
Route::get('/pharmacie', [ProduitController::class, 'index'])->name('pharmacie');
Route::get('detailProdui/{id}', [ProduitController::class, 'show'])->name('detailProdui');
// Route::livewire("")

Route::delete('cartRemove/{id}', [ProduitController::class, 'destroy'])->name('cartRemove');
Route::get('showCat/{id}', [ProduitController::class, 'showCat'])->name('showCat');


Route::post('confirmUserLivraison', [AchatController::class, 'confirmUserLivraison'])->name('confirmUserLivraison');
Route::post('addCard', [ProduitController::class, 'store'])->name('addCard');
Route::post('achatProduit', [AchatController::class, 'store'])->name('achatProduit');
Route::get('getPriceLivraison/{commune}', [AchatController::class, 'getPriceLivraison'])->name('getPriceLivraison');
Route::get('deletePriceLivraison/{commune}', [AchatController::class, 'deletePriceLivraison'])->name('deletePriceLivraison');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.client.accueil');
    })->name('dashboard');

    Route::get('/mesAbonnements', [ServiceController::class, 'index'])->name('mesAbonnements');
    Route::get('/profil', [ServiceController::class, 'profil'])->name('profil');
    Route::get('/mesAchats', [AchatController::class, 'mesAchats'])->name('mesAchats');
    Route::get('/historique', [ServiceController::class, 'historique'])->name('historique');


    Route::get('/detailProduitAcheter/{id}', [AchatController::class, 'show'])->name('detailProduitAcheter');
    Route::get('/detailHistorique/{id}', [ServiceController::class, 'detailHistorique'])->name('detailHistorique');
    Route::get('/detailmonAbonnement/{id}', [ServiceController::class, 'show'])->name('detailmonAbonnement');

    Route::post('/editprofil', [ServiceController::class, 'editprofil'])->name('editprofil');
    Route::post('/editPassword', [ServiceController::class, 'editPassword'])->name('editPassword');


    Route::get('/cl_pharmacie', [ActeController::class, 'index'])->name('cl_pharmacie');
    Route::get('/cl_annuaire', [ActeController::class, 'annuaire'])->name('cl_annuaire');
    Route::get('/cl_specialiste', [ActeController::class, 'specialiste'])->name('cl_specialiste');
    Route::get('/cl_chat', [ActeController::class, 'chat'])->name('cl_chat');
    Route::get('/cl_rendezvous', [ActeController::class, 'rendezvous'])->name('cl_rendezvous');
    Route::get('/cl_achats', [ActeController::class, 'achats'])->name('cl_achats');
    Route::get('/cl_historique', [ActeController::class, 'historique'])->name('cl_historique');
    Route::get('/cl_abonner', [ActeController::class, 'abonner'])->name('cl_abonner');
    Route::get('/cl_ordonance', [ActeController::class, 'ordonance'])->name('cl_ordonance');
});

require __DIR__ . '/auth.php';
