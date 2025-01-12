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
//     return view('Test.welcome');
// });
Route::get('/',[homeController::class,'index']);

// Route::get('/Contract',[homeController::class,'index']);
// Route::get('/layout',[homeController::class,'Layout']);
// Route::get('/home', [homeController::class, 'LayoutProps']);

Route::resource('profiles', ProfileController::class);
//PersonnesDetails
Route::get('/PersonnesDetails',[ProfileController::class,'DetailsPersonne'])->name('PersonnesDetails');

//LoginController
Route::get('/LoginForm', [LoginController::class, 'LoginForm'])->name('LoginForm')->middleware('guest');
Route::post('/LoginForm', [LoginController::class, 'Login'])->name('Login');
Route::get('/Logout', [LoginController::class, 'Logout'])->name('Login.Logout');

Route::get('/About',[ProfileController::class,'indexTest']);



//Test
Route::get('/route',function(){
    //  dd(Route::current());
    //  dd(Route::currentRouteName());
     dd(Route::currentRouteAction());
})->name('AMAL NAM');

Route::get('/google',function(){
    return redirect()->away('https://www.google.com');
});


