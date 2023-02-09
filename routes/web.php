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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/project/show/{project}', [MainController::class, 'projectShow'])
    ->name('project.show');

    Route::get('/project/destroy/{project}', [MainController::class, 'projectDestroy'])
        ->name('project.destroy');
    
    Route::get('/project/create', [MainController::class, 'projectCreate'])
        ->name('project.create');
    
    Route::post('/project/store', [MainController::class, 'projectStore'])
        ->name('project.store');
    
    Route::get('/project/edit/{project}', [MainController::class, 'projectEdit'])
        ->name('project.edit');
    
    Route::post('/project/update/{project}', [MainController::class, 'projectUpdate'])
        ->name('project.update');
});

require __DIR__.'/auth.php';
