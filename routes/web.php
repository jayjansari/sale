<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pc;
use App\Http\Controllers\sc;
use App\Http\Controllers\sic;
use App\Http\Controllers\dummydata;

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

Route::get('/pi', function () {
    return view('insert1');
});
Route::get('/d', function () {
    return view('data');
});

Route::get('/s', function () {
    return view('show');
});

Route::get('/i', function () {
    return view('invoice');
});

Route::post('go',[pc::class,'insert']);

Route::get('/add-dummy-data', [dummydata::class, 'addDummyData']);
Route::get('/s',[sc::class,'show']);
Route::get('update/{id}',[sc::class,'upshow']);
Route::post('up',[sc::class,'update']);
Route::get('invoice/{id}', [sc::class, 'invoice']);
