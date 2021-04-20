<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/culture', [App\Http\Controllers\CultureController::class, 'index'])->name('admin-cultures');
Route::get('/admin/culture/varietes', [App\Http\Controllers\CulturesVarietesController::class, 'index'])->name('admin-varietesCulture');

// culture
Route::get('/admin/culture/ajouter', [App\Http\Livewire\Admin\Agriculture\Culture\AddCulture::class, 'addCulture'])->name('admin-addCulture');
// type culture
Route::get('/admin/culture/type-culture', [App\Http\Livewire\Admin\Agriculture\TypeCulture\TypeCulture::class, 'index'])->name('admin-typesCulture');

Route::get('/admin/utilisateurs/administrateurs', [App\Http\Controllers\UsersController::class, 'userAdmin'])->name('admin-user-admin');
Route::post('/admin/utilisateurs/administrateurs/ajouter', [App\Http\Controllers\UsersController::class, 'addUserAdmin'])->name('admin-user-admin-create');
Route::get('index',[App\Http\Livewire\AddCulture::class,'render']);
});

