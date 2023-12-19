<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\hewancontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){return view ('view_home');});

Route::get('/hewan',[hewancontroller::class,'index']);
Route::get('/hewan/{id}/edit',[hewancontroller::class,'edit']);
Route::get('/hewan/create',[hewancontroller::class,'create']);
Route::post('/hewan/store',[hewancontroller::class,'store']);
Route::put('/hewan/{id}',[hewancontroller::class,'update']);
Route::delete('/hewan/{id}',[hewancontroller::class,'destroy']);