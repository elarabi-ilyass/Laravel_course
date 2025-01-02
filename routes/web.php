<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

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
Route::get('/profiles/{profile}',[ProfileController::class,'Show'])->name('Show.profile');
Route::get('/About',[ProfileController::class,'indexTest']);
Route::post('/profiles', [ProfileController::class, 'ProfileStore'])->name('profiles.store');
Route::get('/create', [ProfileController::class, 'create'])->name('Create-Form');

//LoginController
Route::get('/LoginForm', [LoginController::class, 'LoginForm'])->name('LoginForm');
Route::post('/LoginForm', [LoginController::class, 'Login'])->name('Login');
Route::get('/Logout', [LoginController::class, 'Logout'])->name('Login.Logout');



//indexProfile
// Route::get('/',[ProfileController::class,'indexProfile']);

// Route::resource('profiles', ProfileController::class);

