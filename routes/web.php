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

Route::name('profiles.')->group(function(){
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/','index')->name('home_list');
        Route::get('/profiles/{profile}','Show')->name('Show');
        Route::post('/profiles',  'ProfileStore')->name('store');
        Route::delete('/profiles/{profile}',  'destroy')->name('destroy');
        Route::get('/About','indexTest');
        Route::get('/create',  'create')->name('CreateForm');
        Route::get('/profiles/{profile}/edit',  'edit')->name('Edit');
        Route::put('/profiles/{profile}',  'update')->name('Update');
    });
});

//PersonnesDetails
Route::get('/PersonnesDetails',[ProfileController::class,'DetailsPersonne'])->name('PersonnesDetails');

//LoginController
Route::get('/LoginForm', [LoginController::class, 'LoginForm'])->name('LoginForm');
Route::post('/LoginForm', [LoginController::class, 'Login'])->name('Login');
Route::get('/Logout', [LoginController::class, 'Logout'])->name('Login.Logout');



//indexProfile
// Route::get('/',[,'indexProfile']);

// Route::resource('profiles', );

