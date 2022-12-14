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
Route::put('/merchandises/{merchandise}/{reply}', [MerchandiseController::class, 'startTransaction']);
Route::post('/replies/{merchandise}', [RepliesController::class, 'store']);

Route::get('/messages', [MessageController::class, 'index']); //chatroom一覧
Route::get('/messages/{chatroom}', [MessageController::class, 'show']); //DM
Route::post('/messages/{chatroom}', [MessageController::class, 'store']); //DM保存処理


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
