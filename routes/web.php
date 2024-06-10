<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;


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
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';




	//Account
	Route::get('/register', [UserController::class, 'reg']);
	Route::post('/register', [UserController::class, 'saveReg']);
	Route::get('/account', [UserController::class, 'userLogin']);
	Route::post('/account', [UserController::class, 'authUserLogin']);
	Route::get('/logout', [UserController::class, 'logoutUser']);
	
	//Pages
	Route::get('/', [FrontController::class, 'home']);
	Route::get('/hotels', [FrontController::class, 'hotel']);
	Route::get('/hotels/{id}', [FrontController::class, 'hotel']);
	Route::get('/room_category/{id}', [FrontController::class, 'room_detail']);
	Route::get('/about', [FrontController::class, 'about']);
	Route::get('/gallery', [FrontController::class, 'gallery']);
	Route::get('/contact', [FrontController::class, 'contact']);
	
	Route::middleware('auth')->group(function () {
		Route::get('/profile', [UserController::class, 'showProfile']);
	});
		
	
	


/* Route::get('/', function () {
    return view('welcome');
}); */


/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */


