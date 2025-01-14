<?php


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
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


Route::get('/',[homeController::class,'index']);
Route::resource('profiles', ProfileController::class);
//PersonnesDetails
Route::get('/PersonnesDetails',[ProfileController::class,'DetailsPersonne'])->name('PersonnesDetails');
//LoginController
Route::get('/LoginForm', [LoginController::class, 'LoginForm'])->name('LoginForm')->middleware('guest');
Route::post('/LoginForm', [LoginController::class, 'Login'])->name('Login');
Route::get('/Logout', [LoginController::class, 'Logout'])->name('Login.Logout');
Route::get('/About',[ProfileController::class,'indexTest']);


//Header
// Route::view('/test','Test.test');
// Route::get('/test', function (Request $request) {
//     $response=new Response(['data'=>'Ok']);
//     dd($request->header('Connection'));
//     return $response->withHeaders([
//         'Access-Control-Allow-Origin '=> '*',
//         'Access-Control-Allow-Methods'=> 'GET, POST, PUT, DELETE, OPTIONS',
//         'Access-Control-Allow-Headers'=> 'Content-Type, Accept, Authorization, X-Requested-With',
//     ]);

// })->name('Test');

Route::view('/test','Test.test');
Route::get('/test', function (Request $request) {
//    dd($request->url(),$request->fullUrl());
//    dd($request->path(),$request->route());
//    dd($request->duplicate(),$request->getLanguages());
// dd($request->isFromTrustedProxy(),$request->is('test'));
dd($request->isMethod('GET'),$request->capture());

})->name('Test')->middleware('auth');

// Header + request
  //Content-type:text/html;
  //Accept:application/json
  //Accept-Language:fr-FR
  //Accept-Encoding:gzip, deflate
  //User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64)
  //Accept:application/json
// server -> browser












