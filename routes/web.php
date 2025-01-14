<?php


use Illuminate\Http\Request;
use Illuminate\Http\Response;
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


//Test 1
// Route::view('/form','Test.FormTest');
// Route::post('/form',function(Request $request){
//     return dd($request->all());
// })->name('Test.Form');

//Response
// Route::view('/form','Test.FormTest');
// Route::post('/form',function(Request $request){
//     $response=new Response( 'OK',404,$request->all());
//     return dd($response) ;
// })->name('Test.Form');


//DownLoad image
Route::view('/form','Test.FormTest');
Route::post('/form',function(Request $request){
//using inline display image but not download
//using attachment download image but not display
    return response()->download(storage_path('app/public/images/1735835562.jpg'),null,[],'attachment'); ;
})->name('Test.Form');


//injection de dépendances?



