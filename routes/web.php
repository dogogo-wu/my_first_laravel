<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OrderController;

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

// Route::get('/', [Controller::class, 'welcome_func']);

Route::get('/microsoft', [NewController::class, 'msweb_func']);

Route::get('/', [BootstrapController::class, 'bsweb_func']);

Route::get('/into_prod/{target}', [BootstrapController::class, 'into_prod_func']);
Route::post('/add_to_cart', [BootstrapController::class, 'add_cart_func']);

Route::get('/order_list', [BootstrapController::class, 'order_list']);

Route::middleware(['auth'])->group(function(){
    Route::get('/cart01', [ShoppingController::class, 'bsweb_cart01_func']);
    Route::delete('/cart01/delete/{target}', [ShoppingController::class, 'cart01_del_func']);
    Route::post('/cart02', [ShoppingController::class, 'bsweb_cart02_func']);
    Route::post('/cart03', [ShoppingController::class, 'bsweb_cart03_func']);
    Route::post('/cart04', [ShoppingController::class, 'bsweb_cart04_func']);
    Route::get('/show_order/{target}', [ShoppingController::class, 'show_order']);

});

Route::prefix('/comment')->group(function(){
    Route::get('/', [BootstrapController::class, 'bsweb_comment_func']);
    Route::get('/save', [BootstrapController::class, 'comment_save_func']);
    Route::get('/delete/{target}', [BootstrapController::class, 'comment_delete_func'])->middleware(['auth']);
    Route::get('/edit/{target}', [BootstrapController::class, 'comment_edit_func'])->middleware(['auth']);
    Route::get('/update/{target}', [BootstrapController::class, 'comment_update_func'])->middleware(['auth']);
});


Route::get('/login', [NewController::class, 'bsweb_login_func']);


Route::prefix('/banner')->middleware(['auth'])->group(function(){
    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::post('/store', [BannerController::class, 'store']);
    Route::post('/delete/{target}', [BannerController::class, 'delete']);
    Route::get('/edit/{target}', [BannerController::class, 'edit']);
    Route::post('/update/{target}', [BannerController::class, 'update']);
});

Route::prefix('/product')->middleware(['auth'])->group(function(){
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::post('/delete/{target}', [ProductController::class, 'delete']);
    Route::get('/edit/{target}', [ProductController::class, 'edit']);
    Route::post('/update/{target}', [ProductController::class, 'update']);
    Route::delete('/del_sec_img/{sec_tar}', [ProductController::class, 'del_secimg_func']);
});

Route::prefix('/account')->middleware(['auth'])->group(function(){
    Route::get('/', [AccountController::class, 'index']);

    Route::get('/create', [AccountController::class, 'create']);
    Route::post('/store', [AccountController::class, 'store']);

    Route::post('/delete/{target}', [AccountController::class, 'delete']);

    Route::get('/edit/{target}', [AccountController::class, 'edit']);
    Route::post('/update/{target}', [AccountController::class, 'update']);
});

Route::prefix('/order')->middleware(['auth'])->group(function(){
    Route::get('/', [OrderController::class, 'index']);

    Route::get('/edit/{target}', [OrderController::class, 'edit']);
    Route::post('/update/{target}', [OrderController::class, 'update']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

require __DIR__.'/auth.php';

