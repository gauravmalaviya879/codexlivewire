<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
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

// Route::get('/', function () {
//     return view('index');
// });


Route::view('/','login')->name('login');
Route::view('regUser','regUser')->name('registrationUser');
Route::view('headerImport.','headerImport.');
Route::view('livewireDemo','livewireDemo');
Route::view('serch','userserch');
Route::view('liveSher','liveDataSher');
Route::view('properti','proprtibind');
Route::view('hook','hooklifecycle');
Route::view('registrationuser','registrationuser');
Route::view('nestcomponent','nestedcomponent');
Route::view('nestcomponent','nestedcomponent');
Route::get('grouplist',\App\Http\Livewire\grouplist::class);
Route::get('savegroup',\App\Http\Livewire\savegroup::class);
//  Route::livewire('groupsave','groupsave');
Route::view('groupsave','savegroup');
Route::get('profile',\App\Http\Livewire\profilemenu::class);

//live crud
Route::view('home','livewire.group')->middleware('checkLogin');

// authantication with middlwere


Route::get('logout',[usersController::class,'logout'])->name('logout');
Route::post('register',[usersController::class,'register']);
Route::post('cheackLogin',[usersController::class,'cheackLogin']);

Route::get('groupData',[usersController::class,'groupdata'])->name('groupdata');
Route::get('groupOfdetail/{id}',[usersController::class,'groupOfdetail'])->name('groupdetail');