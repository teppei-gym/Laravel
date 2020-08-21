<?php

use App\Http\User\Controllers\LoginController;
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

Route::namespace('User')->group(function () {
    Route::get('login', 'LoginController@index')->name('login');
    Route::middleware('customAuth')->group((function () {
        Route::get('/', 'RegisterController@index')->name('index');
    }));
    Route::get('create', 'RegisterController@create')->name('create');
    Route::post('/', 'RegisterController@store')->name('store');
});
