<?php

use App\Http\Controllers\EleveController;
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

Route::get('/', [EleveController::class, 'index']);

Route::get('/ajout', function () {
    return view('Eleve.ajout');
});


Route::post('/ajouterEleve', [EleveController::class, 'store']);

// La route de la suppression
Route::delete('/eleve/supprimerEleve/{id}', [EleveController::class, 'destroy']);

