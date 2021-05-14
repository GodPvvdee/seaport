<?php

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

// Route::get('sailor', function () {
//     return view('sailor');
// });
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::get('sailor', 'App\Http\Controllers\SailorController@create');
 Route::post('sailor', 'App\Http\Controllers\SailorController@store')->name('sailor.store');;
 Route::get('company', 'App\Http\Controllers\CompanyController@create');
 Route::post('company', 'App\Http\Controllers\CompanyController@store')->name('company.store');;
