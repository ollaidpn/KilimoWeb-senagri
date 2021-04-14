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
Route::get('/admin/culture/varietes', [App\Http\Livewire\Variete::class, 'render'])->name('admin-varietesCulture');
Route::get('/admin/culture/varietes/edit/{id}', [App\Http\Livewire\Variete::class, 'edit'])->name('admin-varietesCulture-edit');
Route::post('/admin/culture/varietes/create', [App\Http\Livewire\Variete::class, 'addVariete'])->name('admin-varietesCulture-create');
Route::put('/admin/culture/varietes/update/{variete}', [App\Http\Livewire\Variete::class, 'update'])->name('admin-varietesCulture-update');
Route::delete('/admin/culture/varietes/delete/{id}', [App\Http\Livewire\Variete::class, 'destroy'])->name('admin-varietesCulture-delete');

// Semi
Route::get('/admin/culture/type-semie', [App\Http\Livewire\Semie::class, 'render'])->name('admin-type-semie');
Route::get('/admin/culture/type-semie/edit/{id}', [App\Http\Livewire\Semie::class, 'edit'])->name('admin-type-semie-edit');
Route::post('/admin/culture/type-semie/create', [App\Http\Livewire\Semie::class, 'addSemie'])->name('admin-type-semie-create');
Route::put('/admin/culture/type-semie/update/{semie}', [App\Http\Livewire\Semie::class, 'update'])->name('admin-type-semie-update');
Route::delete('/admin/culture/type-semie/delete/{id}', [App\Http\Livewire\Semie::class, 'destroy'])->name('admin-type-semie-delete');


Route::get('/admin/utilisateurs/administrateurs', [App\Http\Controllers\UsersController::class, 'userAdmin'])->name('admin-user-admin');
Route::post('/admin/utilisateurs/administrateurs/ajouter', [App\Http\Controllers\UsersController::class, 'addUserAdmin'])->name('admin-user-admin-create');
});

