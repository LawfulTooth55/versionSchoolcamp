<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\registroAlumnoController;


//liveware

use App\Http\Livewire\Perfil;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('talleres',TallerController::class);

require __DIR__.'/auth.php';

Route::get('/robotica', function () {
    return view('robot');
});

Route::get('/pintura', function () {
    return view('pintura');
});

Route::get('/cocina', function () {
    return view('cocina');
});

Route::get('/ajedrez', function () {
    return view('ajedrez');
});

Route::get('/videojuegos', function () {
    return view('videojuegos');
});

Route::get('/Inscripcion', function () {
    return view('formtaller');
});

Route::resource('registroalumno', registroAlumnoController::class)->middleware('auth');


/* 
//usando liveware

*/

//Do not delete//
	Route::view('tallers', 'livewire.tallers.index');

    Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Do not delete//
	Route::view('events', 'livewire.events.index');
    Route::view('users', 'livewire.users.index')->middleware('auth');
    