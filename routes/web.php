<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchandiseController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
