<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

    Route::get('/admin/{user}/set-admin-r' , [AdminController::class , 'setAdminR'])->name ('admin.setAdmin-r');
    Route::get('/admin/{user}/set-revisor-r' , [AdminController::class , 'setRevisorR'])->name ('admin.setRevisor-r');
    Route::get('/admin/{user}/set-writer-r' , [AdminController::class , 'setWriterR'])->name ('admin.setWriter-r');

    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
});

Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::get('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::get('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::get('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

Route::middleware('writer')->group(function(){
    Route::get('/article/create' , [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store' , [ArticleController::class, 'store'])->name('article.store');
});

Route::get('/article/search' , [ArticleController::class, 'articleSearch'])->name('article.search');
