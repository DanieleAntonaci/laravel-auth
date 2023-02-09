<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class, 'index'])
    ->name('index');

Route::get('/dashboard',[MainController::class, 'dashboard'] )
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



    Route::get('/project/show/guest/{project}', [MainController::class, 'projectGuestShow'])
    ->name('project.guest.show');

// Route::get('/person/destroy/{person}', [MainController::class, 'personDestroy'])
//     ->name('person.destroy');

// Route::get('/person/create', [MainController::class, 'personCreate'])
//     ->name('person.create');

// Route::post('/person/store', [MainController::class, 'personStore'])
//     ->name('person.store');

// Route::get('/person/edit/{person}', [MainController::class, 'personEdit'])
//     ->name('person.edit');

// Route::post('/person/update/{person}', [MainController::class, 'personUpdate'])
//     ->name('person.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/project/show/{project}', [MainController::class, 'projectShow'])
    ->name('project.show');
});

require __DIR__.'/auth.php';
