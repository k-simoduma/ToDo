<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for our application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::post('/create','HomeController@createData')->name('create');
Route::post('/update','HomeController@updateData')->name('update');
Route::post('/delete','HomeController@deleteData')->name('delete');
