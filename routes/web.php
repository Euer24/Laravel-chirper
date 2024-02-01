<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//dit maakt ene route voor alle functies in de chirpcontroller. de chirps na resource(chirps) zorgt ervoor dat in de url /chirps komt te staan
Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'update' ,'destroy']) //dit maakt een route voor alleen de index-store en update functies
    ->middleware(['auth', 'verified']); //de middleware zorgt ervoor dat je ingelogd moet zijn om de functies te kunnen gebruiken
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tailwind' , function(){
   return Inertia::render('Tailwind');
})->name('tailwind');
require __DIR__.'/auth.php';
