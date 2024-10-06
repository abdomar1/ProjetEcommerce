<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
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



// --------------------------------------------------admin-------------------------------------------------

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});
// --------------------------------------------------admin-------------------------------------------------