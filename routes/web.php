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
Route::get('/admin/culture/ajouter', [App\Http\Controllers\CultureController::class, 'addCulture'])->name('admin-addCulture');
Route::get('/admin/culture/type-culture', [App\Http\Controllers\CulturesTypesController::class, 'index'])->name('admin-typesCulture');

// Variétès
Route::get('/admin/culture/varietes', [App\Http\Livewire\Admin\Agriculture\Culture\Varietes\Variete::class, 'render'])->name('admin-varietesCulture');

// Semi
Route::get('/admin/culture/type-semie', [App\Http\Livewire\Admin\Agriculture\Culture\Semies\Semie::class, 'render'])->name('admin-type-semie');


Route::get('/admin/utilisateurs/administrateurs', [App\Http\Controllers\UsersController::class, 'userAdmin'])->name('admin-user-admin');
Route::post('/admin/utilisateurs/administrateurs/ajouter', [App\Http\Controllers\UsersController::class, 'addUserAdmin'])->name('admin-user-admin-create');
});

