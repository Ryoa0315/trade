<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\RepliesController;
use App\Http\Controllers\MessageController;

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

Route::get('/', [MerchandiseController::class, 'index']);
Route::get('/merchandises/create', [MerchandiseController::class, 'create']);
Route::get('/merchandises/{merchandise}', [MerchandiseController::class , 'show']);
Route::post('/merchandises',[MerchandiseController::class, 'store']);
Route::delete('/merchandises/{merchandise}', [MerchandiseController::class, 'delete']);
Route::post('/replies/{merchandise}', [RepliesController::class, 'store']);

Route::get('/messages', [MessageController::class, 'index']);
Route::get('/messages/{me}/{you}', [MessageController::class, 'show']);
Route::post('/messages/{me}/{you}', [MessageController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
