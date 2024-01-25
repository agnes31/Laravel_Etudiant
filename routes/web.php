<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\FileManagerController;
// use App\Models\Etudiant;



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


Route::get('/', function () {
    return view('home');
})->name('home');

//Etudiant
Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index')->middleware('auth');
Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.create');

Route::get('/etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('/etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.edit');
Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'destroy']);


//Authentification
Route::get('/registration', [CustomAuthController::class, 'create'])->name('registration'); // route pour l'inscription {
Route::post('/registration', [CustomAuthController::class, 'store'])->name('registration');  // route pour l'inscription
Route::get('/login', [CustomAuthController::class, 'index'])->name('login'); // route pour la connexion
Route::post('/authentification', [CustomAuthController::class, 'authentification'])->name('authentification'); // route pour la connexion
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout'); // route pour la deconnexion


//Forum
Route::get('/forum', [ForumController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('/forum/{forum}', [ForumController::class, 'show'])->name('forum.show');
Route::get('/forum-create', [ForumController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('/forum-create', [ForumController::class, 'store']);
Route::get('/forum-edit/{forum}', [ForumController::class, 'edit'])->name('forum.edit');
Route::put('/forum-edit/{forum}', [ForumController::class, 'update']);
Route::delete('/forum/{forum}', [ForumController::class, 'destroy']);

//File
Route::get('/fileManager', [FileManagerController::class, 'index'])->name('fileManager.index')->middleware('auth');
Route::get('/fileManager/{fileManager}', [FileManagerController::class, 'show'])->name('fileManager.show');
Route::get('/fileManager-create', [FileManagerController::class, 'create'])->name('fileManager.create')->middleware('auth');
Route::post('/fileManager-create', [FileManagerController::class, 'store']);
Route::get('/fileManager-edit/{fileManager}', [FileManagerController::class, 'edit'])->name('fileManager.edit');
Route::put('/fileManager-edit/{fileManager}', [FileManagerController::class, 'update']);
Route::delete('/fileManager/{fileManager}', [FileManagerController::class, 'destroy']);

//Langue
Route::get('/lang/{locale}', [LocalizationController::class, 'index'])->name('lang'); // route pour la langue
