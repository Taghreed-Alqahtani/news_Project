<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\messagesController;
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
    //return redirect('/login');
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('articles', [ArticlesController::class, 'index'])->middleware('auth');

Route::get('articles/create', [ArticlesController::class, 'create'])->middleware('auth');

Route::get('articles/{article}', [ArticlesController::class, 'show'])->middleware('auth');

Route::post('articles', [ArticlesController::class, 'store'])->middleware('auth');

Route::get('articles/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');

Route::put('articles/{article}', [ArticlesController::class, 'update'])->middleware('auth');

Route::delete('articles/{article}',[ArticlesController::class, 'destroy'])->middleware('auth');


Route::get('landing', [landingController::class, 'index']);
Route::get('category/{category}', [landingController::class, 'category']);
Route::get('allarticles', [landingController::class, 'allArticles']);
Route::post('message', [messagesController::class, 'store']);
Route::get('messages', [messagesController::class, 'index'])->middleware('auth');



// Route::get('/category', function () {
//     return view('category');
// });

Route::get('/search', [ArticlesController::class, 'search']);


Route::get('dashboard', [ArticlesController::class, 'dash']);
