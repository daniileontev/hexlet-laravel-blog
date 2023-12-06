<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('about', [PageController::class, 'about'])
    ->name('about');

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');



Route::get('articles/create', 'ArticleController@create')
    ->name('articles.create');
Route::post('articles', 'ArticleController@store')
    ->name('articles.store');

# id – параметр, который зависит от конкретной статьи
# Фигурные скобки нужны для описания параметров маршрута
Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
    ->name('articles.update');

Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
    ->name('articles.destroy');

Route::resource('articles', ArticleController::class);
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('.about', function () use ($team) {
//    return view('about', ['team' => $team]);
//});
//
//Route::get('.articles', function () use ($team) {
//    $articles = App\Models\Article::all();
//    return view('articles', ['articles' => $articles]);
//});
