<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);
//Route::get('/','PagesController@index');


// Route::get('/hello', function(){
//     return '<h1>Hello world</h1>';
// });

// Route::get('/about', function(){
//     return view('pages.about');
// });

Route::get('/users/{id}', function($id){
    return 'This is a user' . $id;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/edit', 'App\Http\Controllers\PostsController@update');
Route::resource('posts', App\Http\Controllers\PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
