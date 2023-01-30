<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/', function () {
    return view('base');
});

Route::resource('/articles', ArticlesController::class); 

Route::get('/test/{id}', [UserController::class, 'show']);


Route::resource('users', UserController::class);

Route::get('/env', function () {
     dd(env('DB_DATABASE'));
});

Route::get('/articles/{id}/comments/{author?}', function ($id, $author = 'Teau') {
    return $author."a écrit un commentaire sur l'article".$id;
   
});

