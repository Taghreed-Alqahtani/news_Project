<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\commentsController;
use Illuminate\Support\Facades\Route;
use App\Models\article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    return view('auth.login');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', [ArticlesController::class, 'dashboard'])->middleware('auth');

Route::get('articles', [ArticlesController::class, 'index'])->middleware('auth');

Route::get('articles/create', [ArticlesController::class, 'create'])->middleware('auth');

Route::get('articles/{article}', [ArticlesController::class, 'show'])->middleware('auth');

Route::post('articles', [ArticlesController::class, 'store'])->middleware('auth');

Route::get('articles/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');

Route::put('articles/{article}', [ArticlesController::class, 'update'])->middleware('auth');

Route::delete('articles/{article}',[ArticlesController::class, 'destroy'])->middleware('auth');

Route::get('messages', [messagesController::class, 'index'])->middleware('auth');

Route::get('landing', [landingController::class, 'index']);

Route::get('category/{category}', [landingController::class, 'category']);

Route::get('allnews', [landingController::class, 'allArticles']);

Route::post('message', [messagesController::class, 'store']);

Route::get('article/{article}', [landingController::class, 'show']);

Route::get('/search', [landingController::class, 'search']);

Route::get('comments', [commentsController::class, 'index'])->middleware('auth');

Route::post('comment', [commentsController::class, 'store']);

Route::delete('comment/{comment}',[commentsController::class, 'destroy']);

Route::put('editcomment/{comment}', [commentsController::class, 'update']);

Route::get('comment/{comment}/edit', [commentsController::class, 'edit']);

Route::put('comment/{comment}', [commentsController::class, 'approve']);
