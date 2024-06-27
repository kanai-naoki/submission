<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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
Route::middleware('auth')->group(function () {
    Route::get('/', [ContactController::class, 'index']);
});    
Route::get('/', [ContactController::class, 'index']);
Route::post('contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::delete('/contacts/delete', [ContactController::class, 'destroy']);
Route::get('/contacts/search', [ContactController::class, 'search']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/csv-download', [ContactController::class, 'downloadCsv']);

Route::post('/users', [UserController::class, 'store']);




