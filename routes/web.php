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

Route::get('sailors', 'App\Http\Controllers\SailorController@index')->name('sailor.index');
 Route::get('sailor', 'App\Http\Controllers\SailorController@create')->name('sailor.create');
 Route::post('sailor', 'App\Http\Controllers\SailorController@store')->name('sailor.store');;
 Route::get('company', 'App\Http\Controllers\CompanyController@create')->name('company.create');
 Route::post('company', 'App\Http\Controllers\CompanyController@store')->name('company.store');;

 Route::get('sailors/{sailor}/edit', 'App\Http\Controllers\SailorController@edit')->name('sailor.edit');
 Route::post('sailors/{sailor}/update', 'App\Http\Controllers\SailorController@update')->name('sailor.update');
 Route::get('sailors/{sailor}/show', 'App\Http\Controllers\SailorController@show')->name('sailor.show');
 Route::post('sailors/{sailor}/destroy', 'App\Http\Controllers\SailorController@destroy')->name('sailor.destroy');
