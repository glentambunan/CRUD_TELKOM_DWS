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
    return view('home');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/postlogin',[App\Http\Controllers\AuthController::class, 'postlogin'])->name('auth');
Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout'])->name('auth');

Route::group(['middleware' => 'auth'],function(){
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/a2p', [App\Http\Controllers\A2pController::class, 'index'])->name('a2p');
Route::post('/a2p/create',[App\Http\Controllers\A2pController::class, 'create'])->name('a2p');
Route::get('/a2p/{id}/edit', [App\Http\Controllers\A2pController::class, 'edit'])->name('a2p');
Route::post('/a2p/{id}/update', [App\Http\Controllers\A2pController::class, 'update'])->name('a2p');
Route::get('/a2p/{id}/delete', [App\Http\Controllers\A2pController::class, 'delete'])->name('a2p');
Route::get('/a2p/export', [App\Http\Controllers\A2pController::class, 'export'])->name('a2p');
Route::post('/a2p/import', [App\Http\Controllers\A2pController::class, 'importexcel'])->name('a2p.import');
});