<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\BannerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return view('bmi');
// });

// Route::get('/say', function () {
//     return "Hello World!";
// });

Route::get('/', [Controller::class, 'welcome_func']);

Route::get('/microsoft', [NewController::class, 'msweb_func']);

Route::get('/bootstrap', [BootstrapController::class, 'bsweb_func']);

Route::get('/cart01', [BootstrapController::class, 'bsweb_cart01_func']);
Route::get('/cart02', [BootstrapController::class, 'bsweb_cart02_func']);
Route::get('/cart03', [BootstrapController::class, 'bsweb_cart03_func']);
Route::get('/cart04', [BootstrapController::class, 'bsweb_cart04_func']);

Route::get('/comment', [BootstrapController::class, 'bsweb_comment_func']);
Route::get('/comment/save', [BootstrapController::class, 'comment_save_func']);
Route::get('/comment/delete/{target}', [BootstrapController::class, 'comment_delete_func']);
Route::get('/comment/edit/{target}', [BootstrapController::class, 'comment_edit_func']);
Route::get('/comment/update/{target}', [BootstrapController::class, 'comment_update_func']);

Route::get('/bs_login', [NewController::class, 'bsweb_login_func']);


Route::prefix('/banner')->group(function(){
    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::get('/store', [BannerController::class, 'store']);
    Route::get('/delete/{target}', [BannerController::class, 'delete']);
    Route::get('/edit/{target}', [BannerController::class, 'edit']);
    Route::get('/update/{target}', [BannerController::class, 'update']);
});



