<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\FrontController;






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


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [UserController::class, 'login']);
	Route::post('/', [UserController::class, 'saveLogin']);
	Route::get('/logout', [UserController::class, 'logout']);
	Route::get('/profile', [UserController::class, 'showProfile']);
	
				
				//DASHBOARD
				
	Route::get('/dashboard', [DashboardController::class, 'dashboard']);
	
				//SLIDER
				
	Route::get('/slider/add', [SliderController::class, 'view']);
	Route::post('/slider/add', [SliderController::class, 'save']);
	Route::get('/slider/list', [SliderController::class, 'list']);
	Route::get('/slider/edit/{id}', [SliderController::class, 'edit']);
	Route::post('/slider/edit/{id}', [SliderController::class, 'update']);
	Route::post('/slider/delete', [SliderController::class, 'delete']);
	
				//ROOMS CATEGORY
				
	Route::prefix('room_category')->group(function () {		
		Route::get('/add', [RoomCategoryController::class, 'view']);
		Route::post('/add', [RoomCategoryController::class, 'save']);
		Route::get('/list', [RoomCategoryController::class, 'list']);
		Route::get('/delete/{id}', [RoomCategoryController::class, 'delete']);
		Route::get('/edit/{id}', [RoomCategoryController::class, 'edit']);
		Route::post('/edit/{id}', [RoomCategoryController::class, 'update']);
		Route::get('/status/{id}', [RoomCategoryController::class, 'status']);		
	});

				//REVIEW
				
	Route::get('/review/add', [ReviewController::class, 'view']);
	
	
	Route::post('/pack/item/add', [PackItemController::class, 'save']);	
	Route::get('/pack/item/list', [PackItemController::class, 'list']);
	Route::get('/pack/item/status/{id}', [PackItemController::class, 'status']);
	Route::get('/pack/item/delete/{id}', [PackItemController::class, 'delete']);
	
	
				// HOTELS
				
				
	Route::get('/hotel/list', [HotelController::class, 'list']);
	Route::get('/hotel/add', [HotelController::class, 'view']);
	Route::post('/hotel/add', [HotelController::class, 'save']);
	Route::get('/hotel/edit/{id}', [HotelController::class, 'edit']);
	Route::post('/hotel/edit/{id}', [HotelController::class, 'update']);
	Route::post('/hotel/delete', [HotelController::class, 'delete']);	
	
				//FACILITIES
				
	Route::get('/more_icon', [FacilityController::class, 'moreIcon']);
	Route::get('/facility/add', [FacilityController::class, 'view']);
	Route::post('/facility/add', [FacilityController::class, 'save']);
	Route::get('/facility/list', [FacilityController::class, 'list']);
	Route::post('/facility/delete', [FacilityController::class, 'delete']);
	
				//GALLERY				
				
	Route::get('/gallery/image', [ImageGalleryController::class, 'index']);	
	Route::post('/gallery/image/add', [ImageGalleryController::class, 'save']);
	Route::get('/gallery/image/delete/{id}', [ImageGalleryController::class, 'delete']);
	
	Route::get('/gallery/video', [VideoGalleryController::class, 'index']);
	Route::post('/gallery/video/add', [VideoGalleryController::class, 'save']);
	Route::get('/gallery/video/delete/{id}', [VideoGalleryController::class, 'delete']);
	
				//USERS
				
	Route::get('/user/list', [UserController::class, 'userList']);

});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

*/
