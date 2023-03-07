<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/category/{category}' , [ArticleController::class, 'articleByCategory'])->name('article.category');

Route::get('/user/article/{user}' , [ArticleController::class, 'articleByUser'])->name('user.article');

Route::get('/careers' , [PublicController::class, 'careers'])->name('careers');

Route::post('/careers/submit' , [PublicController::class, 'careersSubmit'])->name('careers.submit');

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-admin' , [AdminController::class , 'setAdmin'])->name ('admin.setAdmin');
    Route::get('/admin/{user}/set-revisor' , [AdminController::class , 'setRevisor'])->name ('admin.setRevisor');
    Route::get('/admin/{user}/set-writer' , [AdminController::class , 'setWriter'])->name ('admin.setWriter');
});


