<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchatController;

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
    return view('pages.home');
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

Route::delete('cartRemove/{id}', [ProduitController::class, 'destroy'])->name('cartRemove');
Route::get('showCat/{id}', [ProduitController::class, 'showCat'])->name('showCat');


Route::post('addCard', [ProduitController::class, 'store'])->name('addCard');
Route::post('achatProduit', [AchatController::class, 'store'])->name('achatProduit');
Route::get('getPriceLivraison/{commune}', [AchatController::class, 'getPriceLivraison'])->name('getPriceLivraison');
Route::get('deletePriceLivraison/{commune}', [AchatController::class, 'deletePriceLivraison'])->name('deletePriceLivraison');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages/home');
    })->name('dashboard');

    Route::get('/mesAbonnements', [ServiceController::class, 'index'])->name('mesAbonnements');
    Route::get('/profil', [ServiceController::class, 'profil'])->name('profil');
    Route::get('/historique', [ServiceController::class, 'historique'])->name('historique');

    Route::get('/detailHistorique/{id}', [ServiceController::class, 'detailHistorique'])->name('detailHistorique');
    Route::get('/detailmonAbonnement/{id}', [ServiceController::class, 'show'])->name('detailmonAbonnement');

    Route::post('/editprofil', [ServiceController::class, 'editprofil'])->name('editprofil');
    Route::post('/editPassword', [ServiceController::class, 'editPassword'])->name('editPassword');
});

require __DIR__ . '/auth.php';
