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
    return view('index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/culture', [App\Http\Controllers\CultureController::class, 'index'])->name('admin-cultures');

// moussa
Route::get('/admin/culture/ajouter', [App\Http\Controllers\CultureController::class, 'addCulture'])->name('admin-addCulture');
Route::get('/admin/culture/type-culture', [App\Http\Controllers\CulturesTypesController::class, 'index'])->name('admin-typesCulture');

// Variétès
Route::get('/admin/culture/varietes', [App\Http\Livewire\Admin\Agriculture\Varietes\Variete::class, 'render'])->name('admin-varietesCulture');

// Semie
Route::get('/admin/culture/type-semie', [App\Http\Livewire\Admin\Agriculture\Semies\Semie::class, 'render'])->name('admin-type-semie');

// Sols
Route::get('/admin/culture/type-sols', [App\Http\Livewire\Admin\Agriculture\Sols\Sols::class, 'render'])->name('admin-type-sols');

// Climats
Route::get('/admin/culture/type-climat', [App\Http\Livewire\Admin\Agriculture\Climat\Climat::class, 'render'])->name('admin-type-climat');


// User
Route::get('/admin/profile', [App\Http\Controllers\InfosUserController::class, 'index'])->name('admin-infos-user');
Route::post('/admin/profile/password', [App\Http\Controllers\InfosUserController::class, 'changePassword'])->name('admin-change-password');
Route::patch('/admin/profile/update/{id}', [App\Http\Controllers\InfosUserController::class, 'Account'])->name('update-infos-user');
Route::put('/admin/profile/updateImage/{id}', [App\Http\Controllers\InfosUserController::class, 'updateUserAvatar'])->name('update-image-user');

// User Systeme
Route::post('/admin/profile', [App\Http\Controllers\InfosSystemController::class, 'create'])->name('add-infos-syteme');
Route::put('/admin/profile/system/update/{id}', [App\Http\Controllers\InfosSystemController::class, 'update'])->name('update-infos-syteme');

// add sociale networks
Route::post('/admin/profile/addSociale', [App\Http\Controllers\Sociale_networks::class, 'store'])->name('add-sociale_networks');
Route::patch('/admin/profile/addSociale/{sociale}',[App\Http\Controllers\Sociale_networks::class, 'updateSocialeNetwork'])->name('update-network');

// culture
Route::get('/admin/culture/ajouter', [App\Http\Livewire\Admin\Agriculture\Culture\AddCulture::class, 'addCulture'])->name('admin-addCulture');

// type culture
Route::get('/admin/culture/type-culture', [App\Http\Livewire\Admin\Agriculture\TypeCulture\TypeCulture::class, 'index'])->name('admin-typesCulture');

Route::get('/admin/utilisateurs/administrateurs', [App\Http\Controllers\UsersController::class, 'userAdmin'])->name('admin-user-admin');
Route::post('/admin/utilisateurs/administrateurs/ajouter', [App\Http\Controllers\UsersController::class, 'addUserAdmin'])->name('admin-user-admin-create');
Route::get('index',[App\Http\Livewire\AddCulture::class,'render']);
});

// Agriculture
// formulaire pour ajouter des projet agriculture
Route::get('admin/formulaireAgri',[App\Http\Controllers\Agriculture::class, 'formulaireAgriculture'])->name('ajouter-agricultures');
// liste des projet agricultures
Route::get('admin/listeAgri',[App\Http\Controllers\Agriculture::class, 'listeAgriculture'])->name('liste-agricultures');

// Elevage
// formualire pour ajouter des projets eleevages
Route::get('admin/formulaireElevage',[App\Http\Controllers\Elevage::class, 'formulaireElevage'])->name('ajouter-elevages');
// liste des projets elevage
Route::get('admin/listeElevage',[App\Http\Controllers\Elevage::class, 'listeElevage'])->name('liste-elevages');

// information client
Route::get('admin/profileClient',[App\Http\Controllers\ProfileClient::class, 'profile'])->name('profile');


