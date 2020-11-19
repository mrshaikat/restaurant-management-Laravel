<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
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

Route::get('/', 'App\Http\Controllers\FoodController@showHomePage');
Route::get('menu', 'App\Http\Controllers\FoodController@showMenuPage');
Route::get('location', 'App\Http\Controllers\FoodController@showLocationPage');
Route::get('blog', 'App\Http\Controllers\FoodController@showBlogPage');
Route::get('reservation', 'App\Http\Controllers\FoodController@showReservationPage');
Route::get('news', 'App\Http\Controllers\FoodController@showNewsPage');
Route::get('our-staff', 'App\Http\Controllers\FoodController@showStaffPage');
Route::get('gallery', 'App\Http\Controllers\FoodController@showGalleryPage');