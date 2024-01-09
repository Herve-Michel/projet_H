<?php

use App\Http\Controllers\AgeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('page_01');
});

Route::get('/vers_page_02', function () {    // url (ce qui apparaît dans la barre d'adresse du navigateur)
    return view('page_02');     // nom du fichier blade , nom de la vue
})->name("vers_la_page_02");   // nom de la route défini dans 'name'

Route::post('/vers_traitement_age',  [AgeController::class, 'test_minorite'])->name("vers_le_traitement_age");
