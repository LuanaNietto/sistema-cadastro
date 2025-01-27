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

/*Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('welcome');
})->name('site.courses');

Route::get('/contato', function () {
    return view('welcome');
})->name('site.contact');
*/
Auth::routes();

Route::get('/home', 'AuthController@index')->name('home');
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');
Route::get ('/admin/novo', 'AuthController@addUser')->name('admin.newUser');
Route::post('/admin/store', 'AuthController@storeUser')-> name('users.store');

