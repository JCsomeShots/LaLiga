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
    return view('welcome');
});


Route::get('/clasification', [NavigationController::class, 'clasification'])->name('clasification');
Route::get('/register', [NavigationController::class, 'register'])->name('register');
Route::get('/calendar', [NavigationController::class, 'calendar'])->name('calendar');
Route::get('/result', [NavigationController::class, 'result'])->name('result');
Route::get('/show', [NavigationController::class, 'show'])->name('show');
Route::get('/delete', [NavigationController::class, 'delete'])->name('delete');
Route::get('/organization', [NavigationController::class, 'organization'])->name('organization');

Route::get('/show2{id}', [NavigationController::class, 'show2'])->name('show2');
