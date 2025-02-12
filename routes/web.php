<?php

use App\Http\Controllers\KeteranganController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\PredikatController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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

Route::group(["middleware" => ['auth:sanctum', 'verified']], function () {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::resource('subject', SubjectController::class);
    Route::resource('predikat', PredikatController::class);
    Route::resource('object', ObjectController::class);
    Route::resource('keterangan', KeteranganController::class);
    Route::resource('kalimat', KalimatController::class);

    Route::get('/user', [UserController::class, "index_view"])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
