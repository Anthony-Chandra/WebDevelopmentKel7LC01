<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->to('/home');
});
Route::get('/home', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class,'login'])->middleware(['guest']);
Route::post('/loginProcess', [AuthController::class,'loginProcess']);
Route::get('/register', [AuthController::class,'register'])->middleware(['guest']);
Route::post('/registerProcess', [AuthController::class,'registerProcess']);
Route::get('/logout', [AuthController::class,'logout'])->middleware(['auth']);
Route::get('/catalogue', [CatalogueController::class,'index']);

Route::get('/detail/{car_id}', [CarDetailController::class, 'index']);
