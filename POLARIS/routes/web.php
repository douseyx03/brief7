<?php

use App\Http\Controllers\NoteController;
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

Route::get('/', [EleveController::class, 'index'])->name('home');


Route::get('/ajout', function () {
    return view('Eleve.ajout');
})->name('ajoutEleve');

Route::post('/ajoutNote', function () {
    return view('Note.ajoutnote');
})->name('ajoutNote');


Route::post('/ajouterEleve', [EleveController::class, 'store']);

Route::post('/ajouterNote', [NoteController::class, 'store']);



// Modifier
Route::get('/getone/{eleve}', [EleveController::class, 'show'])->name('getOne');
Route::post('/update', [EleveController::class, 'update']);

Route::get('/list', [EleveController::class, 'index']);

// La route de la suppression
Route::delete('/eleve/supprimerEleve/{id}', [EleveController::class, 'destroy']);

Route::post('/notes/{id}', [NoteController::class, 'index']);
