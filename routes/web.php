<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});


//user
Route::get('/createUser',function(){
    return view('createUser');
});
Route::post('/register',[userController::class,'register']);
Route::post('/login',[userController::class,'login']);
Route::post('/logout',[userController::class,'logout']);
Route::get('/goLog',function(){ return view('onlyLogged'); } )->middleware('mustLog');

Route::get('/goHome',function(){
return view('homePade');
});


//
Route::get('/goAdmin',function(){
    return view('onlyAdmin');
})->middleware('can:visitAdminPages');

Route::post('/upload-avatar',[userController::class,'uploadAvatar']);
