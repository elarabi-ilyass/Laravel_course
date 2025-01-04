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
Route::post('/profiles', [ProfileController::class, 'ProfileStore'])->name('profiles.store');
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
Route::get('/About',[ProfileController::class,'indexTest']);
Route::get('/create', [ProfileController::class, 'create'])->name('Create-Form');
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('Edit_Profile');
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('Update_Profile');

//PersonnesDetails
Route::get('/PersonnesDetails',[ProfileController::class,'DetailsPersonne'])->name('PersonnesDetails');

//LoginController
Route::get('/LoginForm', [LoginController::class, 'LoginForm'])->name('LoginForm');
Route::post('/LoginForm', [LoginController::class, 'Login'])->name('Login');
Route::get('/Logout', [LoginController::class, 'Logout'])->name('Login.Logout');



//indexProfile
// Route::get('/',[ProfileController::class,'indexProfile']);

// Route::resource('profiles', ProfileController::class);

