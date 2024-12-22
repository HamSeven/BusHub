<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Usercontroller;
use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\AdminMiddleware;
use App\Http\Controllers\UserMiddleware;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/reportroad',[HomeController::class,'report2'])->name('report2');
Route::get('/about',[HomeController::class,'about'])->name('about');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','userMiddleware'])->group(function(){
 Route::get('dashboard',[Usercontroller::class,'index'])->name('dashboard');
 Route::get('report',[Usercontroller::class,'report'])->name('report');
 Route::get('route',[Usercontroller::class,'route'])->name('route');
});


   Route::middleware(['auth', 'adminMiddleware'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/bus', [AdminController::class, 'bus'])->name('admin.bus');
    Route::get('/admin/location', [AdminController::class, 'location'])->name('admin.location');
    Route::get('/admin/route', [AdminController::class, 'route'])->name('admin.route');
    Route::get('/admin/status', [AdminController::class, 'status'])->name('admin.status');
    Route::post('/admin/add-location', [AdminController::class, 'addLocation'])->name('admin.add.location');
    Route::post('/admin/update-location', [AdminController::class, 'updateLocation'])->name('admin.update.location');
    Route::post('/admin/delete-location', [AdminController::class, 'deleteLocation'])->name('admin.delete.location');



});


   // Route::get('/admin/location',[Locationcontroller::class,'location'])->name('admin.location');
   // Route::get('/add-location',[Locationcontroller::class,'addLocation'])->name('add.location');
   