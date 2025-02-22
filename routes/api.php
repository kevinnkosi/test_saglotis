<?php

use App\Http\Controllers\CommandeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/commande', [CommandeController::class, 'store'])->name('commande.store');
Route::get('/commande/{id}/Edition', [CommandeController::class, 'edit'])->name('commande.edit');
Route::post('/commande/{id}/Edition', [CommandeController::class, 'update'])->name('commande.update');

Route::post('/commande/{id}/Supression', [CommandeController::class, 'delete'])->name('commande.delete');
