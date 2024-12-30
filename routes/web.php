<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Contract',[homeController::class,'index']);
// Route::get('/layout',[homeController::class,'Layout']);
// Route::get('/home', [homeController::class, 'LayoutProps']);

Route::get('/',[ProfileController::class,'index'])->name('home-list');
Route::get('/profiles/{id}',[ProfileController::class,'Show'])->name('Show.profile');
Route::get('/About',[ProfileController::class,'indexTest']);
Route::post('/profiles', [ProfileController::class, 'ProfileStore'])->name('profiles.store');
Route::get('/create', [ProfileController::class, 'create'])->name('Create-Form');



//indexProfile
// Route::get('/',[ProfileController::class,'indexProfile']);

// Route::resource('profiles', ProfileController::class);

