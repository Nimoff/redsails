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

Route::middleware(['auth'])->group(function (){
    Route::get('/', 'IndexController@index')->name('pupil.index');
    Route::post('/', 'IndexController@filter')->name('pupil.index');


    Route::group(['namespace' => 'Pupil', 'prefix' => 'pupil'], function () {
        Route::get('/', 'PupilController@create')->name('pupil.create');
        Route::post('/', 'PupilController@store')->name('pupil.store');
        Route::get('/{pupil}', 'PupilController@show')->name('pupil.show');
        Route::patch('/{pupil}', 'PupilController@update')->name('pupil.update');
        Route::delete('/{pupil}', 'PupilController@destroy')->name('pupil.destroy');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
