<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
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

Route::prefix('site')->group(function () {
  Route::get('/', HomeController::class);
  Route::get('/produtos', [CategoryController::class, 'index'])->name('produtos');  
  Route::get('/produtos/{slug}', [CategoryController::class, 'show']);
  Route::get('/blog', BlogController::class)->name('blog');
  Route::view('/sobre', 'site.about.index');
  Route::get('/contato', [ContactController::class, 'index']);
  Route::post('/contato', [ContactController::class, 'form']);
});
