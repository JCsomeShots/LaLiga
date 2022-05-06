<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;

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
    return view('register');
});


Route::get('/clasification', [NavigationController::class, 'clasification'])->name('clasification');

Route::get('/register', [NavigationController::class, 'register'])->name('register');

Route::get('/calendar', [NavigationController::class, 'calendar'])->name('calendar');

Route::get('/result', [NavigationController::class, 'result'])->name('result');

Route::get('/showPartido{id}', [NavigationController::class, 'showPartido'])->name('showPartido');

Route::get('/delete', [NavigationController::class, 'delete'])->name('delete');

Route::get('/organization', [NavigationController::class, 'organization'])->name('organization');

Route::get('/showTeam{id}', [NavigationController::class, 'showTeam'])->name('showTeam');

Route::post('teams', [NavigationController::class, 'store'])->name('teams.store');

Route::post('organizationStore', [NavigationController::class, 'organizationStore'])->name('organization.store');

Route::get('mismoEquipo', [NavigationController::class, 'mismoEquipo'])->name('mismoEquipo');

Route::get('/showPartido{partidos}/edit', [NavigationController::class, 'partidosEdit'])->name('partidosEdit');



Route::get('/showTeam{team}/edit', [NavigationController::class, 'teamEdit'])->name('teamEdit');