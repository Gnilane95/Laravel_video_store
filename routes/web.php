<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\NomActorController;
use App\Http\Controllers\ListCategoryController;

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

Route::get('/', [VideoController::class, 'index'])->name("home");
Route::resource('videos', VideoController::class);
Route::post('/actor/{id}', [NomActorController::class,'store'])->name("actor.store");

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('list-category', [ListCategoryController::class, 'index'])->name("category.home");
    Route::post('/list-category', [ListCategoryController::class, 'store'])->name("category.store");
    Route::get('/list-category/delete/{id}', [ListCategoryController::class, 'delete'])->name("category.delete");
    Route::get('/list-category/edit/{id}', [ListCategoryController::class, 'edit'])->name("category.edit");
    Route::put('/list-category/update/{id}', [ListCategoryController::class, 'update'])->name("category.update");
});

require __DIR__.'/auth.php';
