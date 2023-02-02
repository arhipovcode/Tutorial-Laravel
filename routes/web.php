<?php

use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Main\MainController;
use App\Http\Controllers\News\CategoryController;
use App\Http\Controllers\News\NewsController;
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

Route::get('/', [MainController::class, 'index'])->name('main');

//news routes
Route::group([
    'prefix' => '/news', // это общий url
    'as' => 'news' // общий алиас
], function() {
    Route::get('', [NewsController::class, 'index'])->name('');
    Route::get('/{id}/show', [NewsController::class, 'show'])->name('::one')
        ->where('id', '\d+');
    Route::get('/category', [CategoryController::class, 'index'])->name('::category');
});

//admin routes
Route::group([
    'prefix' => 'admin',
    'as' => 'admin::'
], function () {
    Route::get('/', AdminController::class)->name('index');
});
