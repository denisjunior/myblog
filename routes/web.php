<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [ListController::class, 'index']);

Route::get('/ajouter', function () {
    return view('articles.addArticle');
})->middleware('auth');




Route::get('/test/{id}', [UserController::class, 'show']);


Route::resource('users', UserController::class);

 Route::prefix('user')->group(function(){
    Route::resource('/articles', ArticlesController::class)->middleware('auth'); 
 });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
