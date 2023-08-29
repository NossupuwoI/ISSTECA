<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\OpportuniteController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\PreinscriptionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('contact', [ContactController::class, 'contacter']);
Route::get('/dashboard',[DashboardController::class, 'Afficher_dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


//filière
Route::get('filiere', [FiliereController::class, 'aff_filiere']);
Route::post('filiere/traitement', [FiliereController::class, 'Ajouter_filière']);
Route::post('/update/traitement', [FiliereController::class, 'modifier_filiere_traitement']);
Route::get('/deletefiliere/{id}', [FiliereController::class, 'delete_filiere']);

//specialite
Route::get('specialite', [SpecialiteController::class, 'aff_specialite']);
Route::post('specialite/traitement', [SpecialiteController::class, 'Ajouter_specialite']);
Route::post('/update/traitement', [SpecialiteController::class, 'modifier_specialite_traitement']);
Route::get('/deletespecialite/{id}', [SpecialiteController::class, 'delete_specialite']);

//specialite
Route::get('opportunite', [OpportuniteController::class, 'aff_opportunite']);
Route::post('opportunite/traitement', [OpportuniteController::class, 'Ajouter_opportunite']);
Route::post('/update/traitement', [OpportuniteController::class, 'modifier_opportunite_traitement']);
Route::get('/deleteopportunite/{id}', [OpportuniteController::class, 'delete_opportunite']);

//specialite
Route::get('actualite', [ActualiteController::class, 'aff_actualite']);
Route::post('actualite/traitement', [ActualiteController::class, 'Ajouter_actualite']);
Route::post('/update/traitement', [ActualiteController::class, 'modifier_actualite_traitement']);
Route::get('/deleteactualite/{id}', [ActualiteController::class, 'delete_actualite']);

//incription
Route::get('inscription', [InscriptionController::class, 'Afficher_inscription']);
Route::post('inscription/traitement', [InscriptionController::class, 'Ajouter_inscription']);
// Route::post('inscription/traitement', [InscriptionController::class, 'create_user']);

Route::get('liste', [InscriptionController::class, 'Afficher_liste']);
Route::get('/fiche/{id}', [InscriptionController::class, 'Afficher_fiche']);