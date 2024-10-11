<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CommandeDetailController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;





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
    return view('accueil');
});

Route::get('/produits', function () {
    return view('produit');
});

Route::get('/paniers', function () {
    return view('panier');
});

Route::get('/accueils', function () {
    return view('accueil');
});

Route::get('/inscriptions', function () {
    return view('inscription');
});
Route::get('/details', function () {
    return view('detail');
});
Route::get('/contacts', function () {
    return view('contact');
});

Route::get('/categories', function () {
    return view('categorie');
});

//////////////////////////////////////////////////////////////////////////Dashbord

// // Route pour afficher un produit et categorie dans la page accueil
Route::get('/accueils', [HomeController::class, 'afficherDerniers'])->name('accueil');
Route::get('/', [HomeController::class, 'afficherDerniers'])->name('accueil');

//tout les categorie
Route::get('/categories', [HomeController::class, 'afficheToutCate'])->name('categories.affiche');

// Route pour afficher les produits et filtrer par catégorie
Route::get('/produits', [HomeController::class, 'afficheToutProd'])->name('produits.filtrer');
 

//detail de produit  
Route::get('/details/{id}', [HomeController::class, 'show'])->name('detail.produit');
 
//

Route::get('/details/{id}', [HomeController::class, 'afProdDtail'])->name('detail.produit');


// --------------------------------------------------admin-------------------------------------------------

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});
// --------------------------------------------------admin-------------------------------------------------


// ----------------------------------api de crud categories--------------------//
Route::resource('admin/categories', CategorieController::class);

Route::resource('admin/produits', ProduitController::class);

// ----------------------------------api de crud categories --------------------//