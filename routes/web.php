<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Models\article;
use Illuminate\View\View;
use Illuminate\Http\Request;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::get('articles', [ArticlesController::class, 'index'])->middleware('auth');

Route::get('articles/create', [ArticlesController::class, 'create'])->middleware('auth');

Route::get('articles/{article}', [ArticlesController::class, 'show'])->middleware('auth');

Route::post('articles', [ArticlesController::class, 'store'])->middleware('auth');

Route::get('articles/{article}/edit', [ArticlesController::class, 'edit'])->middleware('auth');

Route::put('articles/{article}', [ArticlesController::class, 'update'])->middleware('auth');

Route::delete('articles/{article}',[ArticlesController::class, 'destroy'])->middleware('auth');
