<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('playlist.index');
// });

Route::get('/', [MusicController::class, 'index']);
Route::get('/add', [MusicController::class, 'goToAddView']);
Route::get('/edit/{id}', [MusicController::class, 'goToEditView']);
Route::post('/music/add', [MusicController::class, 'addMusic']);
Route::post('/music/update/{id}', [MusicController::class, 'updateMusic']);
Route::get('/music/delete/{id}', [MusicController::class, 'deleteMusic']);
// Route::resource('music', 'MusicController', ['names' => [
//     'addMusic' => 'music.add',
//     'updateMusic' => 'music.update',
//     'deleteMusic' => 'music.delete'
// ]]);