<?php

use App\Http\Controllers\ParticipantesController;
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
    return view('example');
});



Route::get('/gracias', [ParticipantesController::class, 'gracias'])->name('gracias');
Route::post('/participantes/store', [ParticipantesController::class, 'store'])->name('participantes.store');
Route::get('/exportar-excel', [ParticipantesController::class, 'exportarExcel'])->name('exportar.excel');


Route::get('/panel', function () {
    return view('panel');
})->middleware(['auth', 'verified'])->name('panel');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   

   Route::get('/participantes/index', [ParticipantesController::class, 'index'])->name('participantes.index');
    Route::get('/participantes/show/{participante}', [ParticipantesController::class, 'show'])->name('participantes.show');
Route::get('/participantes/seleccionados', [ParticipantesController::class, 'seleccionados'])->name('participantes.seleccionados');


});

require __DIR__.'/auth.php';
