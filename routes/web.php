<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Frontend\FrontendCategoryController;
use App\Http\Controllers\Frontend\FrontendMenuController;
use App\Http\Controllers\Frontend\FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Redirect;



Route::get('/', [WelcomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/front-categories', [FrontendCategoryController::class,'index'])->name('categories.index');
Route::get('/show-categories/{category}', [FrontendCategoryController::class,'show'])->name('categories.show');
Route::get('/menus', [FrontendMenuController::class,'index'])->name('menus.index');
Route::get('/reservations/step-one', [FrontendReservationController::class,'stepOne'])->name('reservations.step.one');
Route::post('/reservations/step-one', [FrontendReservationController::class,'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two', [FrontendReservationController::class,'stepTwo'])->name('reservations.step.two');
Route::post('/reservations/step-two', [FrontendReservationController::class,'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function()  {
    Route::get('/', [AdminController::class,'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
} );

require __DIR__.'/auth.php';
