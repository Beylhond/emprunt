<?php

use App\Http\Controllers\BanqueController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('client', function () {
    return view('emprunt.client');
});

 //afficher la page de création sans pour autant se connecter
Route::get('client',[ClientController::class, 'create'])->name('client');

Route::resource('clients', ClientController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('banques', BanqueController::class);

    Route::get('supprimer/{id}/',[BanqueController::class, 'supprimer'])->name('supprimer');

    Route::get('activer/{id}/',[ClientController::class, 'activer'])->name('activer');

    Route::get('desactiver/{id}/',[ClientController::class, 'desactiver'])->name('desactiver');


});

require __DIR__.'/auth.php';
