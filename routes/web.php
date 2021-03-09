<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Users;

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

Route::get('/login', [Login::class, 'index']);
Route::get('/forget_password', [Login::class, 'forget']);
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/admin', [users::class, 'administrator']);
Route::get('/admin/create', [users::class, 'adminCreate']);
Route::get('/admin/checking', [users::class, 'checkingAdmin']);
Route::get('/admin/{id}/edit', [users::class, 'adminEdit']);
Route::put('/admin/update/{id?}', [users::class, 'adminPut']);
