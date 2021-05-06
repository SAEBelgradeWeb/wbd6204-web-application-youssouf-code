<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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


/*Route::get('/', function () {
    return view('welcome');

});*/
Route::get('/try', function () {
    return view('posts_auth');
});




Route::get('/secondFilter', [\App\Http\Controllers\PostController::class, 'indexFiltering']);


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[\App\Http\Controllers\PostController::class, 'index']);

Route::get('/filterPosts/{id}',[\App\Http\Controllers\PostController::class, 'indexVehicles']);

Route::get('/post/{id}',[\App\Http\Controllers\PostController::class, 'show_single'] );

Route::get('/home/form', [\App\Http\Controllers\PostController::class, 'create']);

Route::post('/', [\App\Http\Controllers\PostController::class, 'store']);

Route::get('/home/posts', [App\Http\Controllers\PostController::class, 'index_auth'])->name('home')/*->middleware('auth')*/;

Route::get('/home/posts/{id}', [App\Http\Controllers\PostController::class, 'delete'])/*->middleware('auth')*/;

