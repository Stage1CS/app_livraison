<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\ExportImportController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('inscription', [LivreurController::class, 'create_livreur'])->name('ajouter.livreur');
Route::post('inscription', [LivreurController::class, 'store_livreur'])->name('ajouter.livreur');

Route::get('Nom', [LivreurController::class, 'show_livreur'])->name('chercher.livreur.nom');
Route::get('prenom', [LivreurController::class, 'show_livreur'])->name('chercher.livreur.prenom');
Route::get('mail', [LivreurController::class, 'show_livreur'])->name('chercher.livreur.email');
Route::get('numero', [LivreurController::class, 'show_livreur'])->name('chercher.livreur.numero');
Route::get('zone', [LivreurController::class, 'show_livreur'])->name('chercher.livreur.zone');

Route::get('chercherNom', [LivreurController::class, 'show_livreur_nom_choisi'])->name('afficher.livreur.chercherNom');
Route::get('chercherPrenom', [LivreurController::class, 'show_livreur_prenom_choisi'])->name('afficher.livreur.chercherPrenom');
Route::get('chercherEmail', [LivreurController::class, 'show_livreur_email_choisi'])->name('afficher.livreur.chercherEmail');
Route::get('chercherNum', [LivreurController::class, 'show_livreur_numero_choisi'])->name('afficher.livreur.chercherNum');
Route::get('chercherZone', [LivreurController::class, 'show_livreur_zone_choisi'])->name('afficher.livreur.chercherZone');

Route::get('supprimer/{id}', [LivreurController::class, 'destroy_livreur'])->name('supprimer.livreur');
Route::get('edit/{id}', [LivreurController::class, 'edit_livreur'])->name('edit.livreur');
Route::post('update', [LivreurController::class, 'update_livreur'])->name('update.livreur');

Route::get('view', [ExportImportController::class, 'importExportView'])->name('ExportImport.Livreurs');
Route::get('export', [ExportImportController::class, 'export'])->name('export');
Route::get('import', [ExportImportController::class, 'import'])->name('import');



