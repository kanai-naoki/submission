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

Route::get('/', [ContactController::class, 'index']);
/*入力内容確認ページへ遷移するためのルーティング*/
Route::post('/confirm', [ContactController::class, 'confirm']);
/*登録する際のルーティングをどのように設定するか、調べる*/
Route::post('/', [ContactController::class, 'store']);




