<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MusicalVenusController;
use App\Http\Controllers\ShowController;
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
    return view('dashbord.app');
});

Route::resource('artists', ArtistController::class);  
    
Route::get('/artists_show/{id}',[ArtistController::class, 'show'])->name('artists.show');  
Route::get('/artists/edit/{id}',[ArtistController::class, 'edit'] )->name('artists.edit');
Route::get('/artists/update/{id}',[ArtistController::class, 'update'] )->name('artists.update');

//musicalvenus

Route::resource('venus', MusicalVenusController::class);  
    
Route::get('/venus_show/{id}',[MusicalVenusController::class, 'show'])->name('venus.show');  
Route::get('/venus/edit/{id}',[MusicalVenusController::class, 'edit'] )->name('venus.edit');
Route::get('/venus/update/{id}',[MusicalVenusController::class, 'update'] )->name('venus.update');

//shows
Route::resource('shows', ShowController::class);  
