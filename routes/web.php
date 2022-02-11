<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\searchController;
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

Route::get('/', [searchController::class,'pokaz'])->name('glowna');
Route::get('/edytuj/pokaz/{id}', [searchController::class,'edytuj_pokaz'])->name('edytuj.pokaz');
Route::put('/edytuj/edytuj/{id}', [searchController::class,'edytuj_edytuj'])->name('edytuj.edytuj');
Route::get('userform',function(){

    return view('userform');
});

Route::post('/userform', [searchController::class,'dodaj'])->name('dodaj');