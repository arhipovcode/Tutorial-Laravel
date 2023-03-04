<?php

use App\Http\Controllers\Account\IndexController as AccountController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SocialProvidersController;
use App\Http\Controllers\User\IndexController as UserController;
use App\Http\Controllers\User\UserControlController;
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

Route::get('', [MainController::class, 'index'])->name('main');
//Route::get('/', function () {
//    return 'Какой то текст';
//})->name('main'); //Для теста

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('account.logout');
    Route::get('/account', AccountController::class)->name('account');

    //admin routes
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
        'middleware' => 'is_admin',
    ], function () {
        Route::get('/', AdminController::class)->name('index');
        Route::get('/parser', ParserController::class)->name('parser');
        Route::resource('categories', AdminCategoryController::class);
        Route::resource('news', AdminNewsController::class);
    });
});


//User routes
Route::group([
    'prefix' => 'users',
    'as' => 'users.'
], function () {
    Route::get('/', UserController::class)->name('index');
    Route::resource('add', UserControlController::class);
});

//Route::get('session', function () {
//    dd(session()->all());
//});

//Route::get('collection', function () {
//    $names = ['Ann', 'John', 'Billy', 'Jain', 'Fedor'];
//    $collect = \collect($names);
//    $collect->each(function ($item, $key) {
//        dd();
//    });
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/auth/redirect/{driver}', [SocialProvidersController::class, 'redirect'])
        ->where('driver', '\w+')
        ->name('social.auth.redirect');
    Route::get('/auth/callback/{driver}', [SocialProvidersController::class, 'callback'])
        ->where('driver', '\w+');
});
