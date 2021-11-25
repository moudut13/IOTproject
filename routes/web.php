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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Route
Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'App\Http\Controllers\admin','middleware'=>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');
    Route::get('settings','DashboardController@settings')->name('settings');

});

//Author Route
Route::group(['as'=>'author.','prefix' => 'author','namespace' => 'App\Http\Controllers\author','middleware'=>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
