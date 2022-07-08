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

Route::get('/admin/login', [\App\Http\Controllers\AuthController::class, 'index']);
Route::post('/admin/login', [\App\Http\Controllers\AuthController::class, 'loginAction'])->name('login');

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logoutAction'])->name('logout');

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::prefix('category')->name('category')->group(function () {

        Route::get('/index', [\App\Http\Controllers\CategoryController::class, 'index'])->name('.index');

        Route::get('/add', [\App\Http\Controllers\CategoryController::class, 'create'])->name('.create');
        Route::post('/add', [\App\Http\Controllers\CategoryController::class, 'store'])->name('.store');

        Route::get('/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('.edit');
        Route::post('/edit', [\App\Http\Controllers\CategoryController::class, 'update'])->name('.update');

        Route::get('/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('.destroy');

    });
    Route::prefix('article')->name('article')->group(function () {

        Route::get('/index', [\App\Http\Controllers\ArticleController::class, 'index'])->name('.index');

        Route::get('/add', [\App\Http\Controllers\ArticleController::class, 'create'])->name('.create');
        Route::post('/add', [\App\Http\Controllers\ArticleController::class, 'store'])->name('.store');

        Route::get('/edit/{id}', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('.edit');
        Route::post('/edit', [\App\Http\Controllers\ArticleController::class, 'update'])->name('.update');

        Route::get('/destroy/{id}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('.destroy');

    });
});

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/article/{slug}',[\App\Http\Controllers\ArticleController::class,'show'])->name('article.show');
Route::get('/category/{slug}',[\App\Http\Controllers\CategoryController::class,'show'])->name('category.show');
