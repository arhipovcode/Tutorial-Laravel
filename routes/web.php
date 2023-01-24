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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-project', function () {
    return view('info-project');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/news/{id}', static function (int $id): string {
    return "News {$id}";
});
Route::get('/test/{id}', static function (int $id): string {
    return "Test {$id}";
});
