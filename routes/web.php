<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('team', [PageController::class, 'team']);
Route::get('articles', [PageController::class, 'articles'])->name('articles');


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
