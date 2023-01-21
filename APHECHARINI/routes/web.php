<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\OwnedCarsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::get('/contactUs', [HomeController::class, 'contactUs']);

Route::get('/login', [AuthController::class,'login'])->middleware(['guest']);
Route::post('/loginProcess', [AuthController::class,'loginProcess'])->middleware(['guest']);;
Route::get('/register', [AuthController::class,'register'])->middleware(['guest']);
Route::post('/registerProcess', [AuthController::class,'registerProcess'])->middleware(['guest']);
Route::get('/logout', [AuthController::class,'logout'])->middleware(['auth']);

Route::get('/catalogue', [CatalogueController::class,'index'])->middleware(['exceptLessor']);
Route::get('/detail/{car_id}', [CarDetailController::class, 'index']);
Route::post('/detail/rent', [CarDetailController::class, 'rent'])->middleware(['auth', 'lesse']);

Route::get('/orders', [OrderController::class, 'index'])->middleware(['auth', 'lesse']);
Route::get('/orderDetail/{order_id}', [OrderDetailController::class, 'index'])->middleware(['auth', 'lesse']);

Route::post('/orderDetail/update', [OrderDetailController::class, 'update'])->middleware(['auth', 'lesse']);
Route::post('/orderDetail/delete', [OrderDetailController::class, 'delete'])->middleware(['auth', 'lesse']);

Route::get('/ownedCars', [OwnedCarsController::class, 'index'])->middleware(['auth', 'lessor']);
Route::post('/detail/editForm', [CarDetailController::class, 'editForm'])->middleware(['auth', 'lessor']);

Route::get('/Profile/{user_id}', [ProfileController::class,'profile']);
